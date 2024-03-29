@extends('website.layouts.master')

@section('title',\App\CPU\translate('My Wishlists'))

@push('css_or_js')
    <style>
        .headerTitle {
            font-size: 24px;
            font-weight: 600;
            margin-top: 1rem;
        }

        body {
            font-family: sans-serif !important;
        }

        @media (max-width: 600px) {
            .sidebar_heading {
                background: {{$web_config['primary_color']}};
            }

            .sidebar_heading h1 {
                text-align: center;
                color: aliceblue;
                padding-bottom: 17px;
                font-size: 19px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Page Title-->
    <div class="container rtl" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3"></div>
            <div class="col-md-9 sidebar_heading">
                <h1 class="h3  mb-0 float-{{Session::get('direction') === "rtl" ? 'right' : 'left'}} headerTitle">{{\App\CPU\translate('WISHLIST')}}</h1>
            </div>
        </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-2 mb-md-4 mt-3 rtl" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
        <div class="row">
            <!-- Sidebar-->
            @include('website.users-profile.layouts.profile-asside')
        <!-- Content  -->
            <section class="col-lg-9 col-md-9 mt-2" id="set-wish-list">

                    <div class="card box-shadow-sm">
                        <div class="card-header">
                <!-- Item-->
                @include('website.users-profile.layouts._wish-list-data',['wishlists'=>$wishlists])
                        </div>
                    </div>

            </section>
        </div>
    </div>
@endsection

@push('script')

@endpush
