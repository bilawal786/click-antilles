@extends('website.layouts.master')
@section('content')
    <!-- ============================================================= Header End ============================================================= -->
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">Accuil</a>
                    <span class="delimiter">
    <i class="tm tm-breadcrumbs-arrow-right"></i>
</span><a href="#">{{$product->category->name ?? ''}}</a>
                    <span class="delimiter">
    <i class="tm tm-breadcrumbs-arrow-right"></i>
</span>{{$product->name}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="product product-type-simple">
                            <div class="single-product-wrapper">
                                <div class="product-images-wrapper thumb-count-4">
                <span class="onsale">-
                    <span class="woocommerce-Price-amount amount">
                        <span
                            class="woocommerce-Price-currencySymbol"> {{\App\CPU\Helpers::get_product_discount($product,$product->unit_price)}}</span></span>
                </span>
                                    <!-- .onsale -->


                                    <div id="techmarket-single-product-gallery"
                                         class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images"
                                         data-columns="4">
                                        @if($product->images!=null)
                                            @foreach (json_decode($product->images) as $key => $photo)
                                                <div class="techmarket-single-product-gallery-images"
                                                     data-ride="tm-slick-carousel"
                                                     data-wrap=".woocommerce-product-gallery__wrapper"
                                                     data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                                    <div
                                                        class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                                        data-columns="4">
                                                        <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>

                                                        <figure class="woocommerce-product-gallery__wrapper ">
                                                            <div
                                                                data-thumb="{{asset("storage/app/public/product/$photo")}}"
                                                                class="woocommerce-product-gallery__image">
                                                                <a href="{{asset("storage/app/public/product/$photo")}}"
                                                                   tabindex="0">
                                                                    <img width="600" height="600"
                                                                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                         src="{{asset("storage/app/public/product/$photo")}}"
                                                                         class="attachment-shop_single size-shop_single wp-post-image"
                                                                         alt="">
                                                                </a>
                                                            </div>

                                                        </figure>

                                                    </div>
                                                    <!-- .woocommerce-product-gallery -->
                                                </div>
                                            @endforeach
                                        @endif
                                        <!-- .techmarket-single-product-gallery-images -->
                                        @if($product->images!=null)
                                            @foreach (json_decode($product->images) as $key => $photo)
                                                <div class="techmarket-single-product-gallery-thumbnails"
                                                     data-ride="tm-slick-carousel"
                                                     data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper"
                                                     data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                                    <figure class="woocommerce-product-gallery__wrapper ">
                                                        <div data-thumb="{{asset("storage/app/public/product/$photo")}}"
                                                             class="woocommerce-product-gallery__image">
                                                            <a href="{{asset("storage/app/public/product/$photo")}}"
                                                               tabindex="0">
                                                                <img width="600" height="600"
                                                                     onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                     src="{{asset("storage/app/public/product/$photo")}}"
                                                                     class="attachment-shop_single size-shop_single wp-post-image"
                                                                     alt="">
                                                            </a>
                                                        </div>

                                                    </figure>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <!-- .techmarket-single-product-gallery -->

                                </div>
                                <!-- .product-images-wrapper -->
                                <div class="summary entry-summary">
                                    <div class="single-product-header">
                                        <h1 class="product_title entry-title">{{ $product['name']}}</h1>
                                        <a class="add-to-wishlist" href="#"> Ajouter à la liste de souhaits</a>
                                    </div>
                                    <!-- .single-product-header -->
                                    <div class="single-product-meta">
                                        <div class="brand">
                                            <a href="#">
                                                <img alt="galaxy"
                                                     src="{{asset('public/web/assets/logo click antilles.png')}}">
                                            </a>
                                        </div>
                                        <div class="cat-and-sku">
                        <span class="posted_in categories">
                            <a rel="tag" href="#">{{$product->category->name ?? ''}}</a>
                        </span>
                                            <span class="sku_wrapper">SKU:
                            <span class="sku"><b>FP{{rand(100000, 900000)}}</b></span>
                        </span>
                                        </div>
                                        <div class="product-label">
                                            <div class="ribbon label green-label">
                                                <span>A+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .single-product-meta -->
                                    <div class="rating-and-sharing-wrapper">
                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating">
                            <span style="width:100%">Rated
                                <strong class="rating">5.00</strong> sur 5 basé sur
                                <span class="rating">1</span> Évaluation du client</span>
                                            </div>
                                            <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span
                                                    class="count">1</span> Avis client)</a>
                                        </div>
                                    </div>
                                    <!-- .rating-and-sharing-wrapper -->
                                    <div class="woocommerce-product-details__short-description">
                                        <p>
                                            {!! $product['details'] !!}
                                        </p>
                                    </div>
                                    <!-- .woocommerce-product-details__short-description -->
                                    <div class="product-actions-wrapper">
                                        <div class="product-actions">
                                            <p class="price">
                                                <del>
                                <span class="woocommerce-Price-amount amount">
                                    <span
                                        class="woocommerce-Price-currencySymbol"> {{\App\CPU\Helpers::currency_converter($product->unit_price)}}</span></span>
                                                </del>
                                                <ins>
                                <span class="woocommerce-Price-amount amount">
                                    <span
                                        class="woocommerce-Price-currencySymbol">{{\App\CPU\Helpers::currency_converter($product->unit_price-(\App\CPU\Helpers::get_product_discount($product,$product->unit_price)))}}</span>€</span>
                                                </ins>
                                            </p>
                                            <!-- .single-product-header -->
                                            <form enctype="multipart/form-data" method="post" class="cart">
                                                <div class="quantity">
                                                    <label for="quantity-input">Quantité</label>
                                                    <input type="number" size="4" class="input-text qty text"
                                                           title="Qty" value="1" name="quantity" id="quantity-input">
                                                </div>
                                                <!-- .quantity -->

                                                <button  value="185"
                                                        name="add-to-cart" type="submit">Ajouter au panier
                                                </button>
                                            </form>
                                            <!-- .cart -->

                                        </div>
                                        <!-- .product-actions -->
                                    </div>
                                    <!-- .product-actions-wrapper -->
                                </div>
                                <!-- .entry-summary -->
                            </div>
                            <!-- .single-product-wrapper -->
                            <div class="tm-related-products-carousel section-products-carousel"
                                 id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products"
                                 data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                <section class="related">
                                    <header class="section-header">
                                        <h2 class="section-title">Produits connexes</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="products">

                                        @if($products->count() > 0)
                                            @foreach($products as $product)
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="#" rel="nofollow"
                                                           class="add_to_wishlist"> Ajouter à la
                                                            liste de souhaits</a>
                                                    </div>
                                                    <a href="#"
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
                                                        <a class="button add_to_cart_button"
                                                           href="#" rel="nofollow">Add to cart</a>
                                                        {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif


                                    </div>
                                </section>
                                <!-- .single-product-wrapper -->
                            </div>

                        </div>
                        <!-- .product -->
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