@extends('website.layouts.master')
@section('content')
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="home-v1-slider home-slider">

                            <div class="slider-1"
                                 style="background-image: url({{asset('public/web/img/home-v1-background.jpg')}}">
                                <img
                                    onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                    src="{{asset('public/web/img/home-v1-img-1.png')}}" alt="">
                                <div class="caption">
                                    <div class="title">{{\App\CPU\translate('slide1')}}
                                    </div>
                                    <div class="sub-title">{{\App\CPU\translate('slide2')}}
                                    </div>
                                    <div class="button">{{\App\CPU\translate('slide3')}}
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">{{\App\CPU\translate('slide4')}}</div>
                                </div>
                            </div>

                            <div class="slider-1 slider-2"
                                 style="background-image: url({{asset('public/web/img/home-v1-background.jpg')}});">
                                <img src="public/web/img/home-v1-img-2.png" alt="">
                                <div class="caption">
                                    <div class="title">{{\App\CPU\translate('s1')}}
                                        <br> {{\App\CPU\translate('s2')}}
                                        <br> {{\App\CPU\translate('s3')}}
                                    </div>
                                    <div class="sub-title">{{\App\CPU\translate('s4')}}
                                        <br>{{\App\CPU\translate('s5')}}
                                    </div>
                                    <div class="button">{{\App\CPU\translate('s6')}}
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">{{\App\CPU\translate('s7')}}</div>

                                </div>
                            </div>

                        </div>
                        <!-- .home-v1-slider -->
                        <div class="features-list">
                            <div class="features">
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">{{\App\CPU\translate('p1')}}/h5>
                                            <span>{{\App\CPU\translate('from')}} $50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">99% Cliente</h5>
                                            <span>{{\App\CPU\translate('p2')}}</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">365 {{\App\CPU\translate('p3')}}</h5>
                                            <span>{{\App\CPU\translate('p4')}}</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">{{\App\CPU\translate('pai')}}</h5>
                                            <span>{{\App\CPU\translate('sys')}}</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">{{\App\CPU\translate('seul')}}</h5>
                                            <span>{{\App\CPU\translate('marq')}}</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                            </div>
                            <!-- .features -->
                        </div>
                        <!-- /.features list -->
                        <div class="section-deals-carousel-and-products-carousel-tabs row">
                            <section class="column-1 deals-carousel" id="sale-with-timer-carousel">
                                <div class="deals-carousel-inner-block">
                                    <header class="section-header">
                                        <h2 class="section-title">
                                            <strong>Deals</strong> {{\App\CPU\translate('du')}}</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- /.section-header -->
                                    <div class="sale-products-with-timer-carousel deals-carousel-v1">
                                        <div class="products-carousel">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-1">
                                                    <div class="products" data-ride="tm-slick-carousel"
                                                         data-wrap=".products"
                                                         data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#sale-with-timer-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                        @foreach($products as $product)
                                                            <div class="sale-product-with-timer product">
                                                                <a class="woocommerce-LoopProduct-link"
                                                                   href="{{route('product.single',['id'=>$product->id])}}">
                                                                    <div class="sale-product-with-timer-header">
                                                                        <div class="price-and-title">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span
                                                                                            class="woocommerce-Price-amount amount">
                                                                                            <span
                                                                                                class="woocommerce-Price-currencySymbol">{{\App\CPU\Helpers::currency_converter($product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span></span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span
                                                                                            class="woocommerce-Price-amount amount">
                                                                                            <span
                                                                                                class="woocommerce-Price-currencySymbol">
                                                                                                {{\App\CPU\Helpers::currency_converter($product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}

                                                                                    </del>
                                                                                </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>
                                                                        </div>
                                                                        <!-- /.price-and-title -->
                                                                        <div class="sale-label-outer">
                                                                            <div class="sale-saved-label">
                                                                                <span class="saved-label-text">{{\App\CPU\translate('save')}}</span>
                                                                                <span class="saved-label-amount">
                                                                                        <span
                                                                                            class="woocommerce-Price-amount amount">
                                                                                            <span
                                                                                                class="woocommerce-Price-currencySymbol">
                                                                                                @if($product->discount > 0)
                                                                                                    {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                                                                                @endif
                                                                                            </span></span>
                                                                                    </span>
                                                                            </div>
                                                                            <!-- /.sale-saved-label -->
                                                                        </div>
                                                                        <!-- /.sale-label-outer -->
                                                                    </div>
                                                                    <!-- /.sale-product-with-timer-header -->
                                                                    <img width="224" height="197" alt=""
                                                                         class="wp-post-image"
                                                                         src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
                                                                    <div class="deal-progress">
                                                                        <div class="deal-stock">
                                                                            <div class="stock-sold">{{\App\CPU\translate('ven')}}:
                                                                                <strong>0</strong>
                                                                            </div>
                                                                            <div class="stock-available">{{\App\CPU\translate('dis')}}:
                                                                                <strong>1000</strong>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.deal-stock -->
                                                                        <div class="progress">
                                                                            <span style="width:0%" class="progress-bar">0</span>
                                                                        </div>
                                                                        <!-- /.progress -->
                                                                    </div>
                                                                    <!-- /.deal-progress -->
                                                                    <div class="deal-countdown-timer">
                                                                        <div class="marketing-text">
                                                                            <span class="line-1">{{\App\CPU\translate('Acheter')}}</span>
                                                                            <span class="line-2">{{\App\CPU\translate('offer')}}:</span>
                                                                        </div>
                                                                        <!-- /.marketing-text -->
                                                                        <span class="deal-time-diff"
                                                                              style="display:none;">28800</span>
                                                                        <div class="deal-countdown countdown"></div>
                                                                    </div>
                                                                    <!-- /.deal-countdown-timer -->
                                                                </a>
                                                                <!-- /.woocommerce-LoopProduct-link -->
                                                            </div>
                                                        @endforeach
                                                        <!-- /.sale-product-with-timer -->

                                                        <!-- /.sale-product-with-timer -->
                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.woocommerce -->
                                            </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                        <!-- /.slick-list -->
                                    </div>
                                    <!-- /.sale-products-with-timer-carousel -->
                                    <footer class="section-footer">
                                        <nav class="custom-slick-pagination">
                                            <a class="slider-prev left" href="#"
                                               data-target="#sale-with-timer-carousel .products">
                                                <i class="tm tm-arrow-left"></i>{{\App\CPU\translate('previous')}}</a>
                                            <a class="slider-next right" href="#"
                                               data-target="#sale-with-timer-carousel .products">{{\App\CPU\translate('next')}}<i
                                                    class="tm tm-arrow-right"></i></a>
                                        </nav>
                                    </footer>
                                    <!-- /.section-footer -->
                                </div>
                                <!-- /.deals-carousel-inner-block -->
                            </section>
                            <!-- /.deals-carousel -->
                            <section class="column-2 section-products-carousel-tabs tab-carousel-1">
                                <div class="section-products-carousel-tabs-wrap">
                                    <header class="section-header">
                                        <ul role="tablist" class="nav justify-content-end">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#tab-59f89f0881f930" data-toggle="tab">{{\App\CPU\translate('new_arrivals')}}
                                                    </a>
                                            </li>
{{--                                            <li class="nav-item">--}}
{{--                                                <a class="nav-link " href="#tab-59f89f0881f931" data-toggle="tab">{{\App\CPU\translate('enn')}}</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a class="nav-link " href="#tab-59f89f0881f932" data-toggle="tab">--}}
{{--                                                    {{\App\CPU\translate('miee')}}</a>--}}
{{--                                            </li>--}}
                                        </ul>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="tab-content">
                                        <div id="tab-59f89f0881f930" class="tab-pane active" role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                 data-wrap=".products"
                                                 data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @if($products->count() > 0)
                                                                @foreach($products as $product)
                                                                    <div class="product">
                                                                        <div class="yith-wcwl-add-to-wishlist ">
                                                                            <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                               rel="nofollow"
                                                                               class="add_to_wishlist"> {{\App\CPU\translate('add_to_cart')}}s</a>
                                                                        </div>
                                                                        <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                           class="woocommerce-LoopProduct-link">
                                                                            <img
                                                                                src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                                onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                                width="224" height="197"
                                                                                class="wp-post-image" alt="">
                                                                            <span class="price">
                                                                                <ins>
                                                                   <span
                                                                       class="amount">{{\App\CPU\Helpers::currency_converter($product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span>
                                                                                </ins>
                                                                             <del>
                                                                                 @if($product->discount > 0)
                                                                                     <span>
                                                                              {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                                                                     </span>
                                                                                 @endif
                                                                            </del>
                                                                            </span>
                                                                            <!-- /.price -->
                                                                            <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                               rel="nofollow"
                                                                               class="button add_to_cart_button"> {{\App\CPU\translate('add_to_cart')}}</a>

                                                                            {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0881f931" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                 data-wrap=".products"
                                                 data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @foreach($products as $product)
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                           rel="nofollow"
                                                                           class="add_to_wishlist"> {{\App\CPU\translate('add_to_cart')}}</a>
                                                                    </div>
                                                                    <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                       class="woocommerce-LoopProduct-link">
                                                                        <img
                                                                             src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                             width="224"
                                                                             height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                                <ins>
                                                                   <span class="amount">{{\App\CPU\Helpers::currency_converter(
                                                                   $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span>
                                                                                </ins>
                                                                             <del>
                                                                                <span>
                                                                              {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                                                                     </span>
                                                                            </del>
                                                                            </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button"
                                                                           href="{{route('product.single',['id'=>$product->id])}}"
                                                                           rel="nofollow">{{\App\CPU\translate('add_to_cart')}}</a>
                                                                        {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                                    </div>
                                                                </div>
                                                            @endforeach


                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0881f932" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                 data-wrap=".products"
                                                 data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @foreach($products as $product)
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                           rel="nofollow"
                                                                           class="add_to_wishlist"> {{\App\CPU\translate('add_to_cart')}}
                                                                            de souhaits</a>
                                                                    </div>
                                                                    <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                       class="woocommerce-LoopProduct-link">
                                                                        <img
                                                                             src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                             width="224"
                                                                             height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                                <ins>
                                                                   <span class="amount">{{\App\CPU\Helpers::currency_converter(
                                                                   $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span>
                                                                                </ins>
                                                                             <del>
                                                                                <span>
                                                                              {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                                                                     </span>
                                                                            </del>
                                                                            </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button"
                                                                           href="{{route('product.single',['id'=>$product->id])}}"
                                                                           rel="nofollow">{{\App\CPU\translate('add_to_cart')}}</a>
                                                                        {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                                    </div>
                                                                </div>
                                                            @endforeach


                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                        <div id="tab-59f89f0881f933" class="tab-pane " role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                 data-wrap=".products"
                                                 data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @foreach($products as $product)
                                                                <div class="product">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                           rel="nofollow"
                                                                           class="add_to_wishlist"> {{\App\CPU\translate('add_to_cart')}}
                                                                            de souhaits</a>
                                                                    </div>
                                                                    <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                       class="woocommerce-LoopProduct-link">
                                                                        <img
                                                                             src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                             width="224"
                                                                             height="197" class="wp-post-image" alt="">
                                                                        <span class="price">
                                                                                <ins>
                                                                   <span class="amount">{{\App\CPU\Helpers::currency_converter(
                                                                   $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span>
                                                                                </ins>
                                                                             <del>
                                                                                <span>
                                                                              {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                                                                     </span>
                                                                            </del>
                                                                            </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>
                                                                    </a>
                                                                    <div class="hover-area">
                                                                        <a class="button add_to_cart_button"
                                                                           href="{{route('product.single',['id'=>$product->id])}}"
                                                                           rel="nofollow">{{\App\CPU\translate('add_to_cart')}}</a>
                                                                        {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                                    </div>
                                                                </div>
                                                            @endforeach


                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                        <!-- .tab-pane -->
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <!-- .section-products-carousel-tabs-wrap -->
                            </section>
                            <!-- .section-products-carousel-tabs -->
                        </div>
                        <div class="fullwidth-notice stretch-full-width">
                            <div class="col-full">
                                <p class="message">{{\App\CPU\translate('titlee')}}</p>
                            </div>
                            <!-- .col-full -->
                        </div>
                        <!-- .fullwidth-notice -->
                        <section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
                            <header class="section-header">
                                <h4 class="pre-title">{{\App\CPU\translate('c1')}}</h4>
                                <h2 class="section-title">{{\App\CPU\translate('c2')}}
                                    <br>{{\App\CPU\translate('c3')}}</h2>
                                <nav class="custom-slick-nav"></nav>
                                <!-- .custom-slick-nav -->
                                <a class="readmore-link" href="#">{{\App\CPU\translate('c4')}}</a>
                            </header>
                            <!-- .section-header -->
                            <div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel"
                                 data-wrap=".products"
                                 data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-1 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach($category as $key =>$row )
                                            @if($key+1==1)
                                                <div class="product-category product first">
                                                    <a href="#">
                                                        <img width="224" height="197" alt="All in One PC"
                                                             src="{{asset("storage/app/public/category/$row->icon")}}"
                                                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
                                                        <h2 class="woocommerce-loop-category__title">
                                                            {{$row->name}}
                                                        </h2>
                                                    </a>
                                                </div>
                                            @else
                                                <!-- .product-category -->
                                                <div class="product-category product">
                                                    <a href="#">
                                                        <img width="224" height="197" alt="Audio &amp; Music"
                                                             src="{{asset("storage/app/public/category/$row->icon")}}"
                                                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
                                                        <h2 class="woocommerce-loop-category__title">
                                                            {{$row->name}}
                                                        </h2>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .product-categories-carousel -->
                        </section>
                        <!-- .section-categories-carousel -->

                        <section
                            style="background-size: cover; background-position: center center; background-image: url({{asset('public/web/img/card-bg.jpg')}}); height: 853px;"
                            class="section-landscape-full-product-cards-carousel">
                            <div class="col-full">
                                <header class="section-header">
                                    <h2 class="section-title">
                                        <strong>{{\App\CPU\translate('title4')}} &amp </strong> {{\App\CPU\translate('title5')}}
                                    </h2>
                                </header>
                                <!-- .section-header -->
                                <div class="row">
                                    <div class="landscape-full-product-cards-carousel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel"
                                             data-wrap=".products"
                                             data-slick="{&quot;rows&quot;:2,&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesPerRow&quot;:1,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-2">
                                                    <div class="products">
                                                        @foreach($products as $product)
                                                            <div class="landscape-product-card product">
                                                                <div class="media">
                                                                    <div class="yith-wcwl-add-to-wishlist">
                                                                        <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                           rel="nofollow"
                                                                           class="add_to_wishlist">{{\App\CPU\translate('add_to_cart')}}</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="{{route('product.single',['id'=>$product->id])}}">
                                                                        <img class="wp-post-image"

                                                                             src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                             alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link "
                                                                           href="{{route('product.single',['id'=>$product->id])}}">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span
                                                                                            class="amount"> {{\App\CPU\Helpers::currency_converter($product->unit_price)}}</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span
                                                                                            class="amount"> {{\App\CPU\Helpers::currency_converter($product->unit_price)}}</span>
                                                                                    </del>
                                                                                </span>
                                                                            <!-- .price -->
                                                                            <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>

                                                                            <div class="techmarket-product-rating">
                                                                                <div title="Rated 0 out of 5"
                                                                                     class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong
                                                                                                class="rating">0</strong> out of 5</span>
                                                                                </div>
                                                                                <span class="review-count">(0)</span>
                                                                            </div>
                                                                            <!-- .techmarket-product-rating -->
                                                                        </a>
                                                                        <div class="hover-area">
                                                                            <a class="button add_to_cart_button"
                                                                               href="{{route('product.single',['id'=>$product->id])}}">{{\App\CPU\translate('add_to_cart')}}</a>
                                                                            {{--                                                                        <a href="compare.html" class="add-to-compare-link">Add to compare</a>--}}
                                                                        </div>
                                                                        <!-- .hover-area -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <!-- .products -->
                                                </div>
                                                <!-- .woocommerce -->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .slick-dots -->
                                    </div>
                                    <!-- .landscape-full-product-cards-carousel -->
                                </div>
                                <!-- .row -->
                            </div>
                            <!-- .col-full -->
                        </section>
                        <!-- .slick-dots -->
                        <section class="section-hot-new-arrivals section-products-carousel-tabs techmarket-tabs">
                            <div class="section-products-carousel-tabs-wrap">
                                <header class="section-header">
                                    <h2 class="section-title">{{\App\CPU\translate('meil')}}</h2>

                                </header>
                                <!-- .section-header -->
                                <div class="tab-content">
                                    <div id="tab-59f89f08825d50" class="tab-pane active" role="tabpanel">
                                        <div class="products-carousel" data-ride="tm-slick-carousel"
                                             data-wrap=".products"
                                             data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce">
                                                    <div class="products">
                                                        @foreach($products as $product)
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                       rel="nofollow"
                                                                       class="add_to_wishlist"> {{\App\CPU\translate('add_to_cart')}}</a>
                                                                </div>
                                                                <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                   class="woocommerce-LoopProduct-link">
                                                                    <img
                                                                         src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                         width="224"
                                                                         height="197" class="wp-post-image" alt="">
                                                                    <span class="price">
                                                                                <ins>
                                                                   <span class="amount">{{\App\CPU\Helpers::currency_converter(
                                                                   $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span>
                                                                                </ins>
                                                                             <del>
                                                                                <span>
                                                                              {{\App\CPU\Helpers::currency_converter($product->unit_price)}}
                                                                                     </span>
                                                                            </del>
                                                                            </span>
                                                                    <!-- /.price -->
                                                                    <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>
                                                                </a>
                                                                <div class="hover-area">
                                                                    <a class="button add_to_cart_button"
                                                                       href="{{route('product.single',['id'=>$product->id])}}"
                                                                       rel="nofollow">{{\App\CPU\translate('add_to_cart')}}</a>
                                                                    {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                                </div>
                                                            </div>
                                                        @endforeach


                                                    </div>

                                                </div>
                                                <!-- .woocommerce -->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .products-carousel -->
                                    </div>

                                </div>
                                <!-- .tab-content -->
                            </div>
                            <!-- .section-products-carousel-tabs-wrap -->
                        </section>
                        <!-- .section-products-carousel-tabs -->
                        <div class="banners">
                            <div class="row">
                                <div class="banner banner-long text-in-right">
                                    <a href="#">
                                        <div
                                            style="background-size: cover; background-position: center center; background-image: url({{asset('public/web/img/3-2.jpg')}}); height: 259px;"
                                            class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">
                                                        <strong>{{\App\CPU\translate('e1')}}</strong> {{\App\CPU\translate('e2')}}
                                                        {{\App\CPU\translate('e3')}}
                                                        <br> {{\App\CPU\translate('e4')}}.</h3>
                                                </div>
                                                <!-- /.banner-info -->
                                                <span class="banner-action button">{{\App\CPU\translate('parr')}}</span>
                                            </div>
                                            <!-- /.caption -->
                                        </div>
                                        <!-- /.banner-bg -->
                                    </a>
                                </div>
                                <!-- /.banner -->
                                <div class="banner banner-short text-in-left">
                                    <a href="#">
                                        <div
                                            style="background-size: cover; background-position: center center; background-image: url({{asset('public/web/img/3-3.jpg')}}); height: 259px;"
                                            class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">
                                                        <strong>1000 mAh</strong>
                                                        <br> {{\App\CPU\translate('pro')}}.</h3>
                                                </div>
                                                <!-- /.banner-info -->
                                                <span class="price">34.99€</span>
                                                <span class="banner-action button">{{\App\CPU\translate('ach')}}</span>
                                            </div>
                                            <!-- /.caption -->
                                        </div>
                                        <!-- /.banner-bg -->
                                    </a>
                                </div>
                                <!-- /.banner -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.banners -->
                        <section class="section-landscape-products-carousel 4-column-landscape-carousel"
                                 id="landscape-products-carousel">
                            <header class="section-header">
                                <h2 class="section-title">{{\App\CPU\translate('title1')}}</h2>
                                <nav class="custom-slick-nav"></nav>
                            </header>
                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products"
                                 data-slick="{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#landscape-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                                <div class="container-fluid">
                                    <div class="woocommerce columns-5">
                                        <div class="products">
                                            @foreach($products as $product)
                                                <div class="landscape-product-card product">
                                                    <div class="media">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="{{route('product.single',['id'=>$product->id])}}"
                                                               rel="nofollow"
                                                               class="add_to_wishlist"> {{\App\CPU\translate('add_to_cart')}}</a>
                                                        </div>
                                                        <a class="woocommerce-LoopProduct-link" href="#">
                                                            <img class="wp-post-image"

                                                                 src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                 onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                 alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="woocommerce-LoopProduct-link "
                                                               href="{{route('product.single',['id'=>$product->id])}}">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span
                                                                                            class="amount"> {{\App\CPU\Helpers::currency_converter($product->unit_price)}}</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span
                                                                                            class="amount"> {{\App\CPU\Helpers::currency_converter($product->unit_price)}}</span>
                                                                                    </del>
                                                                                </span>
                                                                <!-- .price -->
                                                                <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>
                                                                <div class="ribbon green-label">
                                                                    <span>A++</span>
                                                                </div>
                                                                <div class="techmarket-product-rating">
                                                                    <div title="Rated 0 out of 5"
                                                                         class="star-rating">
                                                                                        <span style="width:0%">
                                                                                            <strong
                                                                                                class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                                <!-- .techmarket-product-rating -->
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button"
                                                                   href="{{route('product.single',['id'=>$product->id])}}">{{\App\CPU\translate('add_to_cart')}}</a>
                                                                {{--                                                                        <a href="compare.html" class="add-to-compare-link">Add to compare</a>--}}
                                                            </div>
                                                            <!-- .hover-area -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                    <!-- /.woocommerce -->
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- /.products-carousel -->
                        </section>

{{--                        <!-- /.section-landscape-products-carousel -->--}}
{{--                        <section class="stretch-full-width section-products-carousel-with-vertical-tabs">--}}
{{--                            <header class="section-header">--}}
{{--                                <h2 class="section-title">--}}
{{--                                    <strong>{{\App\CPU\translate('title2')}} </strong> {{\App\CPU\translate('title3')}}</h2>--}}
{{--                            </header>--}}
{{--                            <!-- /.section-header -->--}}

{{--                            <div class="products-carousel-with-vertical-tabs row">--}}
{{--                                <ul role="tablist" class="nav">--}}
{{--                                    @foreach($category as $row)--}}
{{--                                        @if($row->id <6)--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a class="nav-link active" href="#{{$row->name}}" data-toggle="tab">--}}
{{--                                                    <span class="category-title">--}}
{{--                                                        <i class="tm tm-desktop-pc"></i>{{$row->name}}</span>--}}
{{--                                                    <i class="tm tm-arrow-right"></i>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                                <div--}}
{{--                                    style="background-size: cover; background-position: center center; background-image: url({{asset('public/web/img/vertical-bg.png')}}); height: 552px;"--}}
{{--                                    class="tab-content">--}}

{{--                                    <div id="" class="tab-pane active" role="tabpanel">--}}

{{--                                        <div class="products-carousel" data-ride="tm-slick-carousel"--}}
{{--                                             data-wrap=".products"--}}
{{--                                             data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">--}}
{{--                                            <div class="container-fluid">--}}
{{--                                                <div class="woocommerce columns-5">--}}
{{--                                                    <div class="products">--}}
{{--                                                        @foreach($products as $product)--}}
{{--                                                            <div class="product">--}}
{{--                                                                <div class="yith-wcwl-add-to-wishlist">--}}
{{--                                                                    <a href="{{route('product.single',['id'=>$product->id])}}"--}}
{{--                                                                       rel="nofollow"--}}
{{--                                                                       class="add_to_wishlist"> {{\App\CPU\translate('add_to_cart')}}</a>--}}
{{--                                                                </div>--}}
{{--                                                                <a href="{{route('product.single',['id'=>$product->id])}}"--}}
{{--                                                                   class="woocommerce-LoopProduct-link">--}}
{{--                                                                    <img--}}
{{--                                                                         src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"--}}
{{--                                                                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"--}}
{{--                                                                         width="224"--}}
{{--                                                                         height="197" class="wp-post-image" alt="">--}}
{{--                                                                    <span class="price">--}}
{{--                                                                                <ins>--}}
{{--                                                                   <span class="amount">{{\App\CPU\Helpers::currency_converter(--}}
{{--                                                                   $product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span>--}}
{{--                                                                                </ins>--}}
{{--                                                                             <del>--}}
{{--                                                                                <span>--}}
{{--                                                                              {{\App\CPU\Helpers::currency_converter($product->unit_price)}}--}}
{{--                                                                                     </span>--}}
{{--                                                                            </del>--}}
{{--                                                                            </span>--}}
{{--                                                                    <!-- /.price -->--}}
{{--                                                                    <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 23) }}</h2>--}}
{{--                                                                </a>--}}
{{--                                                                <div class="hover-area">--}}
{{--                                                                    <a class="button add_to_cart_button"--}}
{{--                                                                       href="{{route('product.single',['id'=>$product->id])}}"--}}
{{--                                                                       rel="nofollow">{{\App\CPU\translate('add_to_cart')}}</a>--}}
{{--                                                                    --}}{{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        @endforeach--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- .woocommerce-->--}}
{{--                                            </div>--}}
{{--                                            <!-- .container-fluid -->--}}
{{--                                        </div>--}}
{{--                                        <!-- .products-carousel -->--}}

{{--                                    </div>--}}

{{--                                    <!-- .tab-pane -->--}}

{{--                                    <!-- .tab-pane -->--}}
{{--                                </div>--}}
{{--                                <!-- .tab-content -->--}}
{{--                            </div>--}}

{{--                            <!-- /.products-carousel-with-vertical-tabs -->--}}
{{--                        </section>--}}


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
