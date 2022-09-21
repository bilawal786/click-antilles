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
                                    <div class="title">Tour. Cliquez sur. Développer. La conception modulaire
                                        intelligente simplifie l'ajout de stockage pour les supports de culture.
                                    </div>
                                    <div class="sub-title">Puissant processeur Six Core, sortie d'affichage 4KUHD
                                        dynamique et SSD rapide élégamment enveloppé dans un design en alliage
                                        souple.
                                    </div>
                                    <div class="button">Obtenez le vôtre maintenant
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">Livraison gratuite sur US Terority</div>
                                </div>
                            </div>

                            <div class="slider-1 slider-2"
                                 style="background-image: url({{asset('public/web/img/home-v1-background.jpg')}});">
                                <img src="public/web/img/home-v1-img-2.png" alt="">
                                <div class="caption">
                                    <div class="title">The new-tech gift you
                                        <br> are wishing for is
                                        <br> right here
                                    </div>
                                    <div class="sub-title">Big screens in incredibly slim designs
                                        <br>that in your hand.
                                    </div>
                                    <div class="button">Browse now
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">Free shipping on US Terority</div>
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
                                            <h5 class="mt-0">Livraison gratuite</h5>
                                            <span>from $50</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">99% Cliente</h5>
                                            <span>Commentaires</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">365 Journées</h5>
                                            <span>pour un retour gratuit</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">Paiement</h5>
                                            <span>Système sécurisé</span>
                                        </div>
                                    </div>
                                    <!-- .media -->
                                </div>
                                <!-- .feature -->
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">Seul le meilleur</h5>
                                            <span>Marques</span>
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
                                            <strong>Deals</strong> du pipik</h2>
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
                                                                                <span class="saved-label-text">Sauvegarder</span>
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
                                                                            <div class="stock-sold">Déjà vendu:
                                                                                <strong>0</strong>
                                                                            </div>
                                                                            <div class="stock-available">Disponible:
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
                                                                            <span class="line-1">Acheter</span>
                                                                            <span class="line-2">cette offre:</span>
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
                                                <i class="tm tm-arrow-left"></i>Précédente</a>
                                            <a class="slider-next right" href="#"
                                               data-target="#sale-with-timer-carousel .products">Suivante<i
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
                                                <a class="nav-link active" href="#tab-59f89f0881f930" data-toggle="tab">Nouvelles
                                                    Arrivées</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#tab-59f89f0881f931" data-toggle="tab">En
                                                    soldes</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#tab-59f89f0881f932" data-toggle="tab">Les
                                                    mieux notés</a>
                                            </li>
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
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                               rel="nofollow"
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

                                                                            <button class="button add_to_cart_button" onclick="addToCart()" type="button">{{\App\CPU\translate('add_to_cart')}}</button>

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
                                                                           class="add_to_wishlist"> Ajouter à la liste
                                                                            de souhaits</a>
                                                                    </div>
                                                                    <a href="#"
                                                                       class="woocommerce-LoopProduct-link">
                                                                        <img src="{{asset($product->photo1)}}"
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
                                                                           rel="nofollow">Ajouter à la liste</a>
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
                                                                           class="add_to_wishlist"> Ajouter à la liste
                                                                            de souhaits</a>
                                                                    </div>
                                                                    <a href="#"
                                                                       class="woocommerce-LoopProduct-link">
                                                                        <img src="{{asset($product->photo1)}}"
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
                                                                           rel="nofollow">Ajouter à la liste</a>
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
                                                                           class="add_to_wishlist"> Ajouter à la liste
                                                                            de souhaits</a>
                                                                    </div>
                                                                    <a href="#"
                                                                       class="woocommerce-LoopProduct-link">
                                                                        <img src="{{asset($product->photo1)}}"
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
                                                                           rel="nofollow">Ajouter à la liste</a>
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
                                <p class="message">Téléchargez notre nouvelle application dès aujourd'hui ! Ne manquez
                                    pas nos offres réservées aux mobiles et magasinez avec Android Play..</p>
                            </div>
                            <!-- .col-full -->
                        </div>
                        <!-- .fullwidth-notice -->
                        <section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
                            <header class="section-header">
                                <h4 class="pre-title">Mis en exergue</h4>
                                <h2 class="section-title">Catégories principales
                                    <br>cette semaine</h2>
                                <nav class="custom-slick-nav"></nav>
                                <!-- .custom-slick-nav -->
                                <a class="readmore-link" href="#">Catalogue complet</a>
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
                                        <strong>Power Audio &amp; Visual </strong>entertainment
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
                                                                           class="add_to_wishlist"> Ajouter à la liste
                                                                            de souhaits</a>
                                                                    </div>
                                                                    <a class="woocommerce-LoopProduct-link" href="#">
                                                                        <img class="wp-post-image"
                                                                             src="{{asset($product->photo1)}}"
                                                                             src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                             onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                             alt="">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <a class="woocommerce-LoopProduct-link "
                                                                           href="#">
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
                                                                               href="{{route('product.single',['id'=>$product->id])}}">Ajouter
                                                                                au panier</a>
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
                                    <h2 class="section-title">Meilleur produit chaud</h2>

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
                                                                       class="add_to_wishlist"> Ajouter à la liste
                                                                        de souhaits</a>
                                                                </div>
                                                                <a href="#"
                                                                   class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset($product->photo1)}}"
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
                                                                       rel="nofollow">Ajouter à la liste</a>
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
                                                        <strong>Achetez maintenant</strong> pour trouver des économies
                                                        sur tout ce dont vous avez besoin
                                                        <br> pour le grand jeu.</h3>
                                                </div>
                                                <!-- /.banner-info -->
                                                <span class="banner-action button">Parcourir</span>
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
                                                        <br> Banque d'alimentation Pro.</h3>
                                                </div>
                                                <!-- /.banner-info -->
                                                <span class="price">34.99€</span>
                                                <span class="banner-action button">Acheter maintenant</span>
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
                                <h2 class="section-title">Video Cameras & Photography</h2>
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
                                                               class="add_to_wishlist"> Ajouter à la liste
                                                                de souhaits</a>
                                                        </div>
                                                        <a class="woocommerce-LoopProduct-link" href="#">
                                                            <img class="wp-post-image"
                                                                 src="{{asset($product->photo1)}}"
                                                                 src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                                 onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                 alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="woocommerce-LoopProduct-link "
                                                               href="#">
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
                                                                   href="{{route('product.single',['id'=>$product->id])}}">Ajouter
                                                                    au panier</a>
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
                        <!-- /.section-landscape-products-carousel -->
                        <section class="stretch-full-width section-products-carousel-with-vertical-tabs">
                            <header class="section-header">
                                <h2 class="section-title">
                                    <strong>Gadgets d'aujourd'hui &amp; Mobile </strong> accessoires</h2>
                            </header>
                            <!-- /.section-header -->

                            <div class="products-carousel-with-vertical-tabs row">
                                <ul role="tablist" class="nav">
                                    @foreach($category as $row)
                                        @if($row->id <6)
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#{{$row->name}}" data-toggle="tab">
                                                    <span class="category-title">
                                                        <i class="tm tm-desktop-pc"></i>{{$row->name}}</span>
                                                    <i class="tm tm-arrow-right"></i>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <div
                                    style="background-size: cover; background-position: center center; background-image: url({{asset('public/web/img/vertical-bg.png')}}); height: 552px;"
                                    class="tab-content">

                                    <div id="" class="tab-pane active" role="tabpanel">

                                        <div class="products-carousel" data-ride="tm-slick-carousel"
                                             data-wrap=".products"
                                             data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1600,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-5">
                                                    <div class="products">
                                                        @foreach($products as $product)
                                                            <div class="product">
                                                                <div class="yith-wcwl-add-to-wishlist">
                                                                    <a href="{{route('product.single',['id'=>$product->id])}}"
                                                                       rel="nofollow"
                                                                       class="add_to_wishlist"> Ajouter à la liste
                                                                        de souhaits</a>
                                                                </div>
                                                                <a href="#"
                                                                   class="woocommerce-LoopProduct-link">
                                                                    <img src="{{asset($product->photo1)}}"
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
                                                                       rel="nofollow">Ajouter à la liste</a>
                                                                    {{--                                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>--}}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <!-- .woocommerce-->
                                            </div>
                                            <!-- .container-fluid -->
                                        </div>
                                        <!-- .products-carousel -->

                                    </div>

                                    <!-- .tab-pane -->

                                    <!-- .tab-pane -->
                                </div>
                                <!-- .tab-content -->
                            </div>

                            <!-- /.products-carousel-with-vertical-tabs -->
                        </section>


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
