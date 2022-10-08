@extends('website.layouts.master')
@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">{{\App\CPU\translate('HOME')}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    {{\App\CPU\translate('privacy_policy')}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <header class="entry-header" style="text-align: center!important;">

                                <div class="page-header-caption">
                                    <h1 class="entry-title">{{\App\CPU\translate('privacy_policy')}}</h1>
                                    <p class="entry-subtitle">   {!! $privacy_policy['value'] !!} </p>
                                </div>
                                <!-- .page-header-caption -->
                            </header>

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
