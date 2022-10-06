@extends('website.layouts.master')
@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">{{\App\CPU\translate('HOME')}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    {{\App\CPU\translate('FAQ Second Version')}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">

                            <!-- .entry-header -->
                            <div class="entry-content">

                                <h2 class="faq-title-v2">{{\App\CPU\translate('FAQ Second Version')}}</h2>
                                <div class="faq-subtitle">{{\App\CPU\translate('faq1')}}</div>
                                <div id="accordion" class="faq-accordion-wrap" role="tablist" aria-multiselectable="true">
                                    @php $length=count($helps); @endphp
                                    @php if($length%2!=0){$first=($length+1)/2;}else{$first=$length/2;}@endphp
                                    @for($i=0;$i<$first;$i++)
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{ $helps[$i]['id'] }}" aria-expanded="true" aria-controls="collapseOne{{ $helps[$i]['id'] }}">
                                                    <i class="icon"></i>
                                                    {{ $helps[$i]['question'] }}
                                                </a>
                                            </h5>
                                        </div>
                                        <!-- .card-header -->
                                        <div id="collapseOne{{ $helps[$i]['id'] }}" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-block">
                                                {{ $helps[$i]['answer'] }}
                                                </div>
                                        </div>
                                        <!-- .collapse -->
                                    </div>
                                    @endfor
                                    <!-- .card -->
                                    @for($i=$first;$i<$length;$i++)
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingTwo">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo{{ $helps[$i]['id'] }}" aria-expanded="false" aria-controls="collapseTwo{{ $helps[$i]['id'] }}">

                                                    {{ $helps[$i]['question'] }}
                                                </a>
                                            </h5>
                                        </div>
                                        <!-- .card-header -->
                                        <div id="collapseTwo{{ $helps[$i]['id'] }}" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="card-block">
                                                {{ $helps[$i]['answer'] }}
                                            </div>
                                        </div>
                                        <!-- .collapse -->
                                    </div>
                                    @endfor

                                </div>
                                <!-- .faq-accordion-wrap -->
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
