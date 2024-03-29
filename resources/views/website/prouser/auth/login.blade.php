@extends('website.layouts.master')
@section('content')


    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row justify-content-center for-margin" style="margin-bottom: 60px;">
                <nav class="woocommerce-breadcrumb">
                    <a href="#">{{\App\CPU\translate('Home')}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{\App\CPU\translate('Account')}}
                </nav>
                <div class="col-md-6">
                    <div class="card border-0 box-shadow">
                        <div class="card-body">
                            <h2 class="h4 mb-1">{{\App\CPU\translate('sing_in')}}</h2>
                            <hr class="mt-2">
                            {{-- <h3 class="font-size-base pt-4 pb-2">{{\App\CPU\translate('or_using_form_below')}}</h3> --}}
                            <form class="needs-validation mt-2" autocomplete="off" action="{{route('pro.login')}}"
                                  method="post" id="form-id">
                                @csrf
                                <div class="form-group">
                                    <label for="si-email">{{\App\CPU\translate('email_address')}}
                                        / {{\App\CPU\translate('phone')}}</label>
                                    <input class="form-control" type="text" name="email" id="si-email"
                                           style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                           value="{{old('email')}}"
                                           placeholder="{{\App\CPU\translate('Enter_email_address_or_phone_number')}}"
                                           required>
                                    <div
                                        class="invalid-feedback">{{\App\CPU\translate('please_provide_valid_email_or_phone_number')}}
                                        .
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="si-password">{{\App\CPU\translate('password')}}</label>
                                    <div class="password-toggle">
                                        <input class="form-control" name="password" type="password" id="si-password"
                                               style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                               required>
                                        <label class="password-toggle-btn">
                                            <input class="custom-control-input" type="checkbox"><i
                                                class="czi-eye password-toggle-indicator"></i><span
                                                class="sr-only">{{\App\CPU\translate('Show')}} {{\App\CPU\translate('password')}} </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex flex-wrap justify-content-between">

                                    <div class="form-group">
                                        <input type="checkbox"
                                               class="{{Session::get('direction') === "rtl" ? 'ml-1' : 'mr-1'}}"
                                               name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="" for="remember">{{\App\CPU\translate('remember_me')}}</label>
                                    </div>
                                    <a class="font-size-sm" href="{{route('customer.auth.recover-password')}}">
                                        {{\App\CPU\translate('forgot_password')}}?
                                    </a>
                                </div>
                                {{-- recaptcha --}}
                                @php($recaptcha = \App\CPU\Helpers::get_business_settings('recaptcha'))
                                @if(isset($recaptcha) && $recaptcha['status'] == 1)
                                    <div id="recaptcha_element" style="width: 100%;" data-type="image"></div>
                                    <br/>
                                @else
                                    <div class="row p-2">
                                        <div class="col-6 pr-0">
                                            <input type="text" class="form-control form-control-lg" name="default_captcha_value" value=""
                                                   placeholder="{{\App\CPU\translate('Enter captcha value')}}" style="border: none" autocomplete="off">
                                        </div>
                                        <div class="col-6 input-icons" style="background-color: #FFFFFF; border-radius: 5px;">
                                            <a onclick="javascript:re_captcha();">
                                                <img src="{{ URL('/customer/auth/code/captcha/1') }}" class="input-field" id="default_recaptcha_id" style="display: inline;width: 90%; height: 75%">
                                                <i class="tio-refresh icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                                <button class="btn btn-primary btn-block btn-shadow"
                                        type="submit">{{\App\CPU\translate('sign_in')}}</button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12 flex-between row " style="direction: {{ Session::get('direction') }}">
                                    <div class="mb-3 {{Session::get('direction') === "rtl" ? '' : 'ml-2'}}">
                                        <h6>{{ \App\CPU\translate('no_account_Sign_up_now') }}</h6>
                                    </div>
                                    <div class="mb-3 {{Session::get('direction') === "rtl" ? 'ml-2' : ''}} " style="padding: 0px 10px;">
                                        <a class="btn btn-outline-primary"
                                           href="{{route('register')}}">
                                            <i class="fa fa-user-circle"></i> {{\App\CPU\translate('sing_up')}}
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>

@endsection
