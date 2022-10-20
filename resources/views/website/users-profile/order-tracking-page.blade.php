@extends('website.layouts.master')

@section('title',\App\CPU\translate('My Order List'))
@section('content')

<div id="content" class="site-content">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="{{route('home')}}">{{\App\CPU\translate('HOME')}}</a>
                <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
               {{\App\CPU\translate('Track Order')}}
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="type-page hentry">
                        <header class="entry-header">
                            <div class="page-header-caption">
                                <h1 class="entry-title" style="text-align: center">{{\App\CPU\translate('track_order')}}</h1>
                            </div>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form class="track_order" action="{{route('track-order.result')}}" type="submit" method="post"
                                      style="padding: 15px;">
                                    @csrf

                                    @if(session()->has('Error'))
                                        <div class="alert alert-danger alert-block" style="width: 100%">
                                            <span type="" class="closet " data-dismiss="alert">×</span>
                                            <strong>{{ session()->get('Error') }}</strong>
                                        </div>
                                    @endif
                                    <p>{{\App\CPU\translate('track1')}}.</p>
                                    <p class="form-row form-row-first">
                                        <label for="orderid">{{\App\CPU\translate('order_id')}}</label>
                                        <input type="text" placeholder="{{\App\CPU\translate('order_id')}}." id="orderid" name="order_id" class="input-text">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <label for="order_email">{{\App\CPU\translate('your_phone_number')}}</label>
                                        <input type="text" placeholder="{{\App\CPU\translate('your_phone_number')}}." id="order_email" name="phone_number" class="input-text">
                                    </p>
                                    <div class="clear"></div>
                                    <p class="form-row">
                                        <button class="button" type="submit" name="trackOrder">{{\App\CPU\translate('track_order')}}</button>

                                    </p>
                                </form>
                                <!-- .track_order -->
                            </div>
                            <!-- .woocommerce -->
                        </div>
                        <!-- .entry-content -->
                    </div>
                    <!-- .hentry -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>
@endsection
