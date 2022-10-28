<?php

namespace App\Http\Controllers\Website\ProCustomer\Auth;

use App\CPU\CartManager;
use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Model\Wishlist;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\True_;
use function App\CPU\translate;

class AuthRegisterController extends Controller
{

    public function register()
    {
        session()->put('keep_return_url', url()->previous());
        return view('website.prouser.auth.register');
    }
    public function submit(Request  $request)
    {

        $request->validate([
            'f_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'unique:users',
            'password' => 'required|min:8|same:con_password'
        ], [
            'f_name.required' => 'First name is required',
        ]);

        $user = User::create([
            'f_name' => $request['f_name'],
            'l_name' => $request['l_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'dob' => $request['dob'],
            'role' => 2,
            'is_active' => 1,
            'password' => bcrypt($request['password'])
        ]);

        $address = [
            'customer_id' => $user->id,
            'contact_person_name' => $user->f_name.' '.$user->l_name,
            'address_type' => 'home',
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'is_billing' =>0,
            'latitude' =>$request->latitude,
            'longitude' =>$request->longitude,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('shipping_addresses')->insert($address);
        Toastr::success(translate('registration_success_login_now'));
        return view('website.prouser.auth.login');
    }
    public function login()
    {
        session()->put('keep_return_url', url()->previous());
        return view('website.prouser.auth.login');
    }
    public function submitLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $user = User::where(['phone' => $request->email])->where('role','=',2)->orWhere(['email' => $request->email])->first();
        if (isset($user) == false) {
            Toastr::error('Credentials do not match or account has been suspended.');
            return back()->withInput();
        }
        if (isset($user) && $user->is_active && auth('customer')->attempt(['email' => $user->email, 'password' => $request->password,'role'=>2])) {
            session()->put('wish_list', Wishlist::where('customer_id', auth('customer')->user()->id)->pluck('product_id')->toArray());
            Toastr::info('Welcome to ' . Helpers::get_business_settings('company_name') . '!');
            CartManager::cart_to_db();
            return redirect(route('all-product'));
        }
        Toastr::error('Credentials do not match or account has been suspended.');
        return back()->withInput();

    }
}
