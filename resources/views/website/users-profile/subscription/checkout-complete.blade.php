@extends('website.layouts.master')
@section('content')

    @push('css_or_js')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

            body {
                font-family: 'Montserrat', sans-serif
            }

            .card {
                border: none
            }

            .totals tr td {
                font-size: 13px
            }

            .footer span {
                font-size: 12px
            }

            .product-qty span {
                font-size: 14px;
                color: #6A6A6A;
            }

            .spanTr {
                color: {{$web_config['primary_color']}};
                font-weight: 700;

            }

            .spandHeadO {
                color: #030303;
                font-weight: 500;
                font-size: 20px;

            }

            .font-name {
                font-weight: 600;
                font-size: 13px;
            }

            .amount {
                font-size: 17px;
                color: {{$web_config['primary_color']}};
            }

            @media (max-width: 600px) {
                .orderId {
                    margin- {{Session::get('direction') === "rtl" ? 'left' : 'right'}}: 91px;
                }

                .p-5 {
                    padding: 2% !important;
                }

                .spanTr {

                    font-weight: 400 !important;
                    font-size: 12px;
                }

                .spandHeadO {

                    font-weight: 300;
                    font-size: 12px;

                }

                .table th, .table td {
                    padding: 5px;
                }
            }
        </style>
    @endpush

    @section('content')
        <div class="container mt-5 mb-5 rtl"
             style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-lg-10">
                    <div class="card">
                        @if(auth('customer')->check())
                            <div class=" p-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 style="font-size: 20px; font-weight: 900">{{\App\CPU\translate('subscription1')}}
                                            !</h5>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <center>
                                            <i style="font-size: 100px; color: #0f9d58" class="fa fa-check-circle"></i>
                                        </center>
                                    </div>
                                </div>
                                <?php
                                \Carbon\Carbon::setLocale('fr');
                                $date = \Carbon\Carbon::parse($subscription->end_date);?>
                                <span class="font-weight-bold d-block mt-4" style="font-size: 17px;">{{\App\CPU\translate('Hello')}}, {{auth('customer')->user()->f_name}}</span>
                                <span>{{\App\CPU\translate('subscription2') . ' '. $date->diffForHumans()}} </span>

                                <div class="row mt-4">
                                    <div class="col-6">
                                        {{--                                    <a href="{{route('home')}}" class="btn btn-primary">--}}
                                        {{--                                        {{\App\CPU\translate('go_to_shopping')}}--}}
                                        {{--                                    </a>--}}
                                    </div>

                                    <div class="col-6">
                                        <a href="{{route('pro-product')}}"
                                           class="btn btn-primary pull-{{Session::get('direction') === "rtl" ? 'left' : 'right'}}">
                                            {{\App\CPU\translate('subscription3')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('script')

    @endpush
