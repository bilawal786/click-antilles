@extends('website.layouts.master')
@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">{{\App\CPU\translate('HOME')}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    {{\App\CPU\translate('About Us')}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <header class="entry-header" style="text-align: center!important;">

                                <div class="page-header-caption">
                                    <h1 class="entry-title">{{\App\CPU\translate('About Us')}}</h1>
                                    <p class="entry-subtitle"> {!! $about_us['value'] !!} </p>
                                </div>
                                <!-- .page-header-caption -->
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <div class="about-features row">
                                    <div class="col-md-4">
                                        <div class="single-image">
                                            <img alt="" class="" src="{{asset('public/photos/setting/3column1.jpg')}}">
                                        </div>
                                        <!-- .single_image -->
                                        <div class="text-block">
                                            <h2 class="align-top">{{\App\CPU\translate('History of Beginning')}}</h2>
                                            <p>{{\App\CPU\translate('about1')}}</p></div>
                                        <!-- .text_block -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-4">
                                        <div class="single-image">
                                            <img alt="" class="" src="{{asset('public/photos/setting/3column2.jpg')}}">
                                        </div>
                                        <!-- .single_image -->
                                        <div class="text-block">
                                            <h2 class="align-top">{{\App\CPU\translate('History of Beginning')}}</h2>
                                            <p>{{\App\CPU\translate('about1')}}</p>
                                        </div>
                                        <!-- .text_block -->
                                    </div>
                                    <!-- .col -->
                                    <div class="col-md-4">
                                        <div class="single-image">
                                            <img alt="" class="" src="{{asset('public/photos/setting/3column3.jpg')}}">
                                        </div>
                                        <!-- .single_image -->
                                        <div class="text-block">
                                            <h2 class="align-top">{{\App\CPU\translate('History of Beginning')}}</h2>
                                            <p>{{\App\CPU\translate('about1')}}</p>
                                        </div>
                                        <!-- .text_block -->
                                    </div>
                                    <!-- .col -->
                                </div>

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
    <!-- #content -->
@endsection
