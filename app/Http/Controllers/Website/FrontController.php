<?php
namespace App\Http\Controllers\Website;
use App\CPU\CartManager;
use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Model\Banner;
use App\Model\Cart;
use App\Model\Category;
use App\Model\Order;
use App\Model\Product;
use App\Model\Wishlist;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use View;
use function App\CPU\translate;
class FrontController extends Controller
{
    public function index()
    {
        $category = Category::where('position', 0)->priority()->take(11)->get();
        $main_banner = Banner::where('banner_type', 'Main Banner')->where('published', 1)->orderBy('id', 'desc')->get();
        $products = Product::where('featured', 1)->get();
        return view('website.index', compact('category', 'main_banner', 'products'));
    }
    public function productSingle($id)
    {
        $product = Product::find($id);
        $products = Product::where('featured', 1)->get();
        $wishlist = Wishlist::where('product_id', '=', $id)->where('customer_id', '=', auth('customer')->id())->first();
        return view('website.product.single', compact('product', 'products', 'wishlist'));
    }
    public function updateNavCart()
    {
        return response()->json(['data' => view('website.layouts.product.cart')->render()]);
    }
    public function productCheckout()
    {
        $cart_group_ids = CartManager::get_cart_group_ids();
        $carts = Cart::whereIn('cart_group_id', $cart_group_ids)->get();
        if (count($cart_group_ids) > 0) {
            return view('website.product.checkout', compact('carts'));
        }
        Toastr::info(translate('You Cart Empty'));
        return redirect()->back();
    }
    public function productCart()
    {
        if (auth('customer')->check() && Cart::where(['customer_id' => auth('customer')->id()])->count() > 0) {
            return view('website.product.shop-cart');
        }
        Toastr::info(translate('no_items_in_basket'));
        return redirect('/');
    }
    public function account_oder()
    {
        $orders = Order::where('customer_id', auth('customer')->id())->orderBy('id', 'DESC')->get();
        return view('website.users-profile.account-orders', compact('orders'));
    }
    public function user_account()
    {
        if (auth('customer')->check()) {
            $customerDetail = User::where('id', auth('customer')->id())->first();
            return view('website.users-profile.account-profile', compact('customerDetail'));
        } else {
            return redirect()->route('home');
        }
    }
    public function account_order_details(Request $request)
    {
        $order = Order::find($request->id);
        return view('website.users-profile.account-order-details', compact('order'));
    }
    public function generate_invoice($id)
    {
        $order = Order::with('seller')->with('shipping')->where('id', $id)->first();
        $data["email"] = $order->customer["email"];
        $data["order"] = $order;
        $mpdf_view = View::make('website.users-profile.layouts.invoice')->with('order', $order);
        Helpers::gen_mpdf($mpdf_view, 'order_invoice_', $order->id);
    }
    public function viewWishlist()
    {
        $wishlists = Wishlist::where('customer_id', auth('customer')->id())->get();
        return view('website.users-profile.account-wishlist', compact('wishlists'));
    }
    public function products($id = null, $position = null)
    {
        if ($id != null && $position != null) {
            $products = Product::active()
                ->where('featured', 1)
                ->paginate(10);
        } else {
            $products = Product::where('featured', 1)->paginate(10);
        }
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.search-product', compact('products', 'category'));
    }
    public function categoryProducts($id = null, $position = null){
        if ($id != null && $position != null) {
            $all_products = Product::all();
            $product_ids = [];
            foreach($all_products as $product){
                foreach(json_decode($product['category_ids'],true) as $category){
                    if($category['id'] == $id && $category['position'] == $position){
                        array_push($product_ids, $product['id']);
                    }
                }
            }
            $products = Product::active()->whereIn('id', $product_ids)->paginate(10);
            $category = Category::where('position', 0)->priority()->get();
            return view('website.product.search-product', compact('products', 'category'));
        }
    }
    public function productSearch(Request $request)
    {
        if ($request->min_price != null || $request->max_price != null) {
            $products = Product::where('featured', 1)->whereBetween('unit_price', [Helpers::convert_currency_to_usd($request['min_price']), Helpers::convert_currency_to_usd($request['max_price'])])->paginate(10);
        }
        else {
            $products = Product::where(function ($query) use ($request) {
                $query->orWhere('name', 'like', "%{$request->name}%");
            })->where('featured', 1)
                ->paginate(10);
        }
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.search-product', compact('products', 'category'));
    }
    public function productSearchFilter($key)
    {
        $slug = decrypt($key);
        $query = Product::where('featured', 1);
        if ($slug == 'latest') {
            $fetched = $query->latest();
        } elseif ($slug == 'low-high') {
            $fetched = $query->orderBy('unit_price', 'ASC');
        } elseif ($slug == 'high-low') {
            $fetched = $query->orderBy('unit_price', 'DESC');
        } elseif ($slug == 'a-z') {
            $fetched = $query->orderBy('name', 'ASC');
        } elseif ($slug == 'z-a') {
            $fetched = $query->orderBy('name', 'DESC');
        } else {
            $fetched = $query;
        }
        $products = $fetched->paginate(10);
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.search-product', compact('products', 'category'));
    }
    public function track_order()
    {
        return view('website.users-profile.order-tracking-page');

    }
    public function track_order_result(Request $request)
    {
        $user =  auth('customer')->user();
        if(!isset($user)){
            $user_id = User::where('phone',$request->phone_number)->first()->id;
            $orderDetails = Order::where('id',$request['order_id'])->whereHas('details',function ($query) use($user_id){
                $query->where('customer_id',$user_id);
            })->first();

        }else{
            if($user->phone == $request->phone_number){
                $orderDetails = Order::where('id',$request['order_id'])->whereHas('details',function ($query){
                    $query->where('customer_id',auth('customer')->id());
                })->first();
            }

        }


        if (isset($orderDetails)){
            return view('website.users-profile.order-tracking', compact('orderDetails'));
        }

        return redirect()->back()->with('Error', 'Invalid Order Id or Phone Number');
    }
    public function productShip()
    {
        $cart_group_ids = CartManager::get_cart_group_ids();
        $carts = Cart::whereIn('cart_group_id', $cart_group_ids)->get();
        $products = Product::all();
        if (count($cart_group_ids) > 0) {
            return view('website.product.ship', compact('carts','products'));
        }
        Toastr::info(translate('You Cart Empty'));
        return redirect()->back();
    }
}
