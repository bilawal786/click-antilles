<?php

namespace App\Http\Controllers\Website\ProCustomer;

use App\CPU\CartManager;
use App\CPU\Helpers;
use App\CPU\OrderManager;
use App\Http\Controllers\Controller;
use App\Model\BusinessSetting;
use App\Model\Category;
use App\Model\Currency;
use App\Model\Product;
use App\Subscription;
use App\Subscrption;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Stripe;

class ProCustomerController extends Controller
{
    public function products($id = null, $position = null)
    {
        if ($id != null && $position != null) {

            $products = Product::where('pro','=',2)->where('featured', 1)
                ->paginate(10);
        } else {
            $products = Product::where('pro','=',2)->where('featured', 1)->paginate(10);
        }
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.proproduct.index', compact('products', 'category'));
    }
    public function productSearchFilter($key)
    {
        $slug = decrypt($key);
        $query = Product::where('featured', 1)->where('pro','=',2);
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
        return view('website.product.proproduct.index', compact('products', 'category'));
    }
    public function productSearch(Request $request)
    {

        if ($request->min_price != null || $request->max_price != null) {
            $products = Product::where('featured', 1)->where('pro','=',2)->whereBetween('unit_price', [Helpers::convert_currency_to_usd($request['min_price']), Helpers::convert_currency_to_usd($request['max_price'])])->paginate(10);
        }
        else {
            $products = Product::where(function ($query) use ($request) {
                $query->orWhere('name', 'like', "%{$request->name}%");
            })->where('featured', 1)->where('pro','=',2)
                ->paginate(10);
        }
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.proproduct.index', compact('products', 'category'));
    }
    public function proSubscription()
    {
        $user = auth('customer')->user();
         return view('website.users-profile.subscription.checkout',compact('user'));
    }
    public function payment_process_4d()
    {

        $currency_model = Helpers::get_business_settings('currency_model');
        if ($currency_model == 'multi_currency') {
            $currency_code = 'USD';
        } else {
            $default = BusinessSetting::where(['type' => 'system_default_currency'])->first()->value;
            $currency_code = Currency::find($default)->code;
        }


        $config = \App\CPU\Helpers::get_business_settings('stripe');
        Stripe::setApiKey($config['api_key']);
        header('Content-Type: application/json');
        $YOUR_DOMAIN = url('/');
        $value = 50;

        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => $currency_code,
                    'unit_amount' => round($value, 2) * 100,
                    'product_data' => [
                        'name' => BusinessSetting::where(['type' => 'company_name'])->first()->value,
                        'images' => [asset('storage/app/public/company') . '/' . Helpers::get_business_settings('company_web_logo')],
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/pro/subscriptionn',
            'cancel_url' => url()->previous(),
        ]);
        return response()->json(['id' => $checkout_session->id]);
    }
    public function success()
    {

        $user = auth('customer')->user();
        $date = Carbon::now();
        $subscription = new Subscrption();
        $subscription->user_id = $user->id;
        $subscription->price = 50;
        $subscription->start_date = Carbon::now();
        $subscription->end_date = $date->addDays(365);
        $subscription->save();
        $user->subscription = 1;
        $user->date = $date->addDays(365);
        $user->save();
        if (auth('customer')->check()) {
            Toastr::success('Payment success.');
            return view('website.users-profile.subscription.checkout-complete',compact('subscription'));
        }
        return response()->json(['message' => 'Payment succeeded'], 200);
    }
    }
