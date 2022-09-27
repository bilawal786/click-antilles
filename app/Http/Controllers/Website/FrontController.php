<?php

namespace App\Http\Controllers\Website;

use App\CPU\CartManager;
use App\Http\Controllers\Controller;
use App\Model\Banner;
use App\Model\Cart;
use App\Model\Category;
use App\Model\Product;
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
        return view('website.product.single', compact('product', 'products'));

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
            return view('website.product.checkout',compact('carts'));
        }
        Toastr::info(translate('You Cart Empty'));
        return redirect()->back();
    }
}
