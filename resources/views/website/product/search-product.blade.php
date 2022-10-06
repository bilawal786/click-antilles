@extends('website.layouts.master')
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">{{\App\CPU\translate('HOME')}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{\App\CPU\translate('Products')}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <div class="shop-control-bar">
                            <div class="handheld-sidebar-toggle">
                                <button type="button" class="btn sidebar-toggler">
                                    <i class="fa fa-sliders"></i>
                                    <span>{{\App\CPU\translate('filter')}}</span>
                                </button>
                            </div>
                            <!-- .handheld-sidebar-toggle -->
                            <h1 class="woocommerce-products-header__title page-title">{{\App\CPU\translate('Product List')}}</h1>
                            <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
                                        <i class="tm tm-grid-small"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#grid-extended" title="Grid Extended View" data-toggle="tab"
                                       class="nav-link ">
                                        <i class="tm tm-grid"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view-large" title="List View Large" data-toggle="tab"
                                       class="nav-link ">
                                        <i class="tm tm-listing-large"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
                                        <i class="tm tm-listing"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#list-view-small" title="List View Small" data-toggle="tab"
                                       class="nav-link ">
                                        <i class="tm tm-listing-small"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- .shop-view-switcher -->
                            <form class="form-techmarket-wc-ppp" method="POST">
                                <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()"
                                        name="ppp">
                                    <option value="20">{{\App\CPU\translate('Show')}} 20</option>
                                    <option value="40">{{\App\CPU\translate('Show')}} 40</option>
                                    <option value="-1">{{\App\CPU\translate('Show')}} All</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .form-techmarket-wc-ppp -->
{{--                            <form method="get" class="woocommerce-ordering">--}}
{{--                                <select class="orderby" name="orderby">--}}
{{--                                    <option value="popularity">Sort by popularity</option>--}}
{{--                                    <option value="rating">Sort by average rating</option>--}}
{{--                                    <option selected="selected" value="date">Sort by newness</option>--}}
{{--                                    <option value="price">Sort by price: low to high</option>--}}
{{--                                    <option value="price-desc">Sort by price: high to low</option>--}}
{{--                                </select>--}}
{{--                                <input type="hidden" value="5" name="shop_columns">--}}
{{--                                <input type="hidden" value="15" name="shop_per_page">--}}
{{--                                <input type="hidden" value="right-sidebar" name="shop_layout">--}}
{{--                            </form>--}}
                            <!-- .woocommerce-ordering -->
                            <nav class="techmarket-advanced-pagination">
                                <form class="form-adv-pagination" method="post">
                                    <input type="number" value="1" class="form-control" step="1" max="5" min="1"
                                           size="2" id="goto-page">
                                </form>
                                of 5<a href="#" class="next page-numbers">→</a>
                            </nav>
                            <!-- .techmarket-advanced-pagination -->
                        </div>
                        <!-- .shop-control-bar -->
                        <div class="tab-content">
                            <div id="grid" class="tab-pane active" role="tabpanel">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        <!-- .product -->
                                        @foreach($products as $product)
                                            <div class="product ">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <a href="#" rel="nofollow" class="add_to_wishlist"> Add to
                                                        Wishlist</a>
                                                </div>
                                                <!-- .yith-wcwl-add-to-wishlist -->
                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                   href="{{route('product.single',['id'=>$product->id])}}">
                                                    <img width="224" height="197" alt=""
                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                         src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                         onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
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
                                                    <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 35) }}</h2>
                                                </a>
                                                <!-- .woocommerce-LoopProduct-link -->
                                                <div class="hover-area">
                                                    <a class="button"
                                                       href="{{route('product.single',['id'=>$product->id])}}">{{\App\CPU\translate('add_to_cart')}}</a>
                                                </div>
                                                <!-- .hover-area -->
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="grid-extended" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach($products as $product)
                                        <div class="product ">
                                            <div class="yith-wcwl-add-to-wishlist">
                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Add to
                                                    Wishlist</a>
                                            </div>
                                            <!-- .yith-wcwl-add-to-wishlist -->
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                               href="{{route('product.single',['id'=>$product->id])}}">
                                                <img width="224" height="197" alt=""
                                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                     src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                     onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
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
                                                <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 43) }}
                                                    </h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <div class="techmarket-product-rating">
                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                            <span style="width:100%">
                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                </div>
                                                <span class="review-count">(1)</span>
                                            </div>
                                            <!-- .techmarket-product-rating -->
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">FP{{rand(100000, 900000)}}</span>
                                                    </span>
{{--                                            <div class="woocommerce-product-details__short-description">--}}
{{--                                                <ul>--}}
{{--                                                    <li>{!! Str::limit($product['details'], 43)  !!} </li>--}}

{{--                                                </ul>--}}
{{--                                            </div>--}}
                                            <!-- .woocommerce-product-details__short-description -->
                                            <a class="button product_type_simple add_to_cart_button" href="{{route('product.single',['id'=>$product->id])}}">{{\App\CPU\translate('add_to_cart')}}</a>

                                        </div>
                                        @endforeach

                                        <!-- .product -->
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .tab-pane -->
                            <div id="list-view-large" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        @foreach($products as $product)
                                        <div class="product list-view-large  ">
                                            <div class="media">
                                                <img width="224" height="197" alt=""
                                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                     src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                     onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="#" rel="nofollow"
                                                               class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                           href="{{route('product.single',['id'=>$product->id])}}">
                                                            <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 43) }}</h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="{{asset('public/web/assets/logo click antilles.png')}}">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>CUJO smart firewall brings business-level Internet
                                                                    security to protect all of your home devices
                                                                </li>
                                                                <li>Internet Security: Guard your network and smart
                                                                    devices against hacks, malware, and cyber threats
                                                                </li>
                                                                <li>Mobile App: Monitor your wired and wireless network
                                                                    activity with a sleek iPhone or Android app
                                                                </li>
                                                                <li>CUJO connects to your wireless router with an
                                                                    ethernet cable. CUJO is not compatible with Luma and
                                                                    does not support Google Wifi Mesh. CUJO works with
                                                                    Eero in Bridge mode.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                        <span class="sku_wrapper">SKU:
                                                                    <span class="sku">FP{{rand(100000, 900000)}}</span>
                                                                </span>
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            {{\App\CPU\translate('Availability')}}:
                                                            <p class="stock in-stock">{{$product->current_stock}} in stock</p>
                                                        </div>
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
                                                        <a class="button add_to_cart_button" href="{{route('product.single',['id'=>$product->id])}}">{{\App\CPU\translate('add_to_cart')}}</a>

                                                    </div>
                                                    <!-- .product-actions -->
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
                            <!-- .tab-pane -->
                            <div id="list-view" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">

                                        <!-- .product -->
                                        @foreach($products as $product)
                                        <div class="product list-view  ">
                                            <div class="media">
                                                <img width="224" height="197" alt=""
                                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                     src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                     onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="#" rel="nofollow"
                                                               class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                           href="{{route('product.single',['id'=>$product->id])}}">
                                                            <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 43) }}
                                                                </h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="{{asset('public/web/assets/logo click antilles.png')}}">
                                                            </a>
                                                        </div>
                                                        <!-- .brand -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>{!! $product->details !!}
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
                                                        <div class="availability">
                                                            Availability:
                                                            <p class="stock in-stock">{{$product->current_stock}}  in stock</p>
                                                        </div>
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
                                                        <a class="button add_to_cart_button" href="{{route('product.single',['id'=>$product->id])}}">{{\App\CPU\translate('add_to_cart')}}
                                                            </a>

                                                    </div>
                                                    <!-- .product-actions -->
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
                            <!-- .tab-pane -->
                            <div id="list-view-small" class="tab-pane" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        @foreach($products as $product)
                                        <div class="product list-view-small ">
                                            <div class="media">
                                                <img width="224" height="197" alt=""
                                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                     src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                     onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'">
                                                <div class="media-body">
                                                    <div class="product-info">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="#" rel="nofollow"
                                                               class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                           href="{{route('product.single',['id'=>$product->id])}}">
                                                            <h2 class="woocommerce-loop-product__title">{{ Str::limit($product['name'], 43) }}
                                                                </h2>
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                        </a>
                                                        <!-- .woocommerce-LoopProduct-link -->
                                                        <div class="woocommerce-product-details__short-description">
                                                            <ul>
                                                                <li>
                                                                    {!! $product->details !!}
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <!-- .woocommerce-product-details__short-description -->
                                                    </div>
                                                    <!-- .product-info -->
                                                    <div class="product-actions">
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
                                                        <a class="button add_to_cart_button" href="{{route('product.single',['id'=>$product->id])}}">{{\App\CPU\translate('add_to_cart')}}
                                                            </a>

                                                    </div>
                                                    <!-- .product-actions -->
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
                            <!-- .tab-pane -->
                        </div>
                        <!-- .tab-content -->
                        <div class="shop-control-bar-bottom" style="margin-top: 20px;">

                            <nav class="woocommerce-pagination">
                                {{$products->links()}}
                                <!-- .page-numbers -->
                            </nav>
                            <!-- .woocommerce-pagination -->
                        </div>
                        <!-- .shop-control-bar-bottom -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                    <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories"
                         id="techmarket_product_categories_widget-2">
                        <ul class="product-categories ">
                            <li class="product_cat">
                                <span>{{\App\CPU\translate('Browse Categories')}}</span>
                                <ul>
                                   @foreach($category as $row)
                                    <li class="cat-item">
                                        <a href="#">
                                                    <span class="child-indicator">
                                                        <i class="fa fa-angle-right"></i>
                                                    </span>{{$row->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                        <span class="gamma widget-title">Filters</span>
                        <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
                            <p>
                                <span class="gamma widget-title">Filter by price</span>
                            <div class="price_slider_amount">
                                <input id="amount" type="text" placeholder="Min price" data-min="6" value="33"
                                       name="min_price" style="display: none;">
                                <button class="button" type="submit">Filter</button>
                            </div>
                            <div id="slider-range" class="price_slider"></div>
                        </div>

                        <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-3">
                            <span class="gamma widget-title">Color</span>
                            <ul>
                                <li class="wc-layered-nav-term "><a href="#">Black</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Blue</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Green</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Orange</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Red</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Green</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Orange</a>
                                    <span class="count">(5)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Red</a>
                                    <span class="count">(4)</span>
                                </li>
                                <li class="wc-layered-nav-term "><a href="#">Yellow</a>
                                    <span class="count">(5)</span>
                                </li>
                            </ul>
                        </div>
                        <!-- .woocommerce widget_layered_nav -->
                    </div>

                </div>
                <!-- #secondary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
@endsection
