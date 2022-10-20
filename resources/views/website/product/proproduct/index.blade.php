@extends('website.layouts.master')
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('home')}}">{{\App\CPU\translate('HOME')}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{\App\CPU\translate('Products')}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php $user = auth('customer')->user();?>
                       @if($user->subscription==1)
                        <div class="shop-archive-header">
                            <div class="jumbotron">
                                <div class="jumbotron-img">
                                    <img width="416" height="283" alt="" src="{{asset('public/assets/jumbo.jpg')}}" class="jumbo-image alignright">
                                </div>
                                <div class="jumbotron-caption">
                                    <h3 class="jumbo-title">{{\App\CPU\translate('pro1')}}</h3>
                                    <p class="jumbo-subtitle">{{\App\CPU\translate('pro2')}}
                                        <br>
                                        <br>{{\App\CPU\translate('pro3')}}
                                        <a href="#" class="btn btn-primary" style="width: 30%;color: white;border-radius: 30px;padding: 10px;font-size: 12px;margin-top: 20px;">{{\App\CPU\translate('pro5')}} <i class="tm tm-long-arrow-right"></i></a>
                                    </p>
                                </div>
                                <!-- .jumbotron-caption -->
                            </div>
                            <!-- .jumbotron -->
                        </div>
                        @else
                                <div class="shop-archive-header">
                                    <div class="jumbotron">
                                        <div class="jumbotron-img">
                                            <img width="416" height="283" alt="" src="{{asset('public/assets/jumbo.jpg')}}" class="jumbo-image alignright">
                                        </div>
                                        <div class="jumbotron-caption">
                                            <h3 class="jumbo-title">{{\App\CPU\translate('pro1')}}</h3>
                                            <p class="jumbo-subtitle">{{\App\CPU\translate('pro2')}}
                                                <br>
                                                <br>{{\App\CPU\translate('pro3')}}
                                                <a href="#">{{\App\CPU\translate('pro4')}} <i class="tm tm-long-arrow-right"></i></a>
                                            </p>
                                        </div>
                                        <!-- .jumbotron-caption -->
                                    </div>
                                    <!-- .jumbotron -->
                                </div>

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

                            <form method="get" class="woocommerce-ordering">
                                <select class="orderby" name="orderby" onchange="location = this.options[this.selectedIndex].value;">
                                    <option selected disabled>{{\App\CPU\translate('Choose')}}</option>
                                    <option value="{{route('pro.search.product',['key'=>encrypt('latest')] ) }}">{{\App\CPU\translate('Latest')}}</option>
                                    <option
                                        value="{{route('pro.search.product',['key'=>encrypt('low-high')] ) }}">{{\App\CPU\translate('Low_to_High')}} {{\App\CPU\translate('Price')}} </option>
                                    <option
                                        value="{{route('pro.search.product',['key'=>encrypt('high-low')] ) }}">{{\App\CPU\translate('High_to_Low')}} {{\App\CPU\translate('Price')}}</option>
                                    <option
                                        value="{{route('pro.search.product',['key'=>encrypt('a-z')] ) }}">{{\App\CPU\translate('A_to_Z')}} {{\App\CPU\translate('Order')}}</option>
                                    <option
                                        value="{{route('pro.search.product',['key'=>encrypt('z-a')] ) }}">{{\App\CPU\translate('Z_to_A')}} {{\App\CPU\translate('Order')}}</option>
                                </select>
                                <input type="hidden" value="5" name="shop_columns">
                                <input type="hidden" value="15" name="shop_per_page">
                                <input type="hidden" value="right-sidebar" name="shop_layout">
                            </form>
                            <!-- .woocommerce-ordering -->
                            <nav class="techmarket-advanced-pagination">
                                <form class="form-adv-pagination" method="post" >

                                    <input type="number" value="1"  class="form-control" step="1" max="5" min="1"
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
                                                                    <li>
                                                                        {{$product->details}}
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
                        @endif
                        <!-- .shop-control-bar-bottom -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                @if($user->subscription!=0)
                <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                    <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories"
                         id="techmarket_product_categories_widget-2">
                        <ul class="product-categories ">
                            <li class="product_cat">
                                <span>{{\App\CPU\translate('Browse Categories')}}</span>
                                <ul>
                                    @foreach($category as $row)
                                        <li class="cat-item">
                                            <a href="{{route('pro-product',['id'=>$row->id,'position'=>1])}}">
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
                        <span class="gamma widget-title">{{\App\CPU\translate('filter')}}</span>
                        <form action="{{route('pro.product.search')}}" method="post">
                            @csrf
                            <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">

                                <span class="gamma widget-title">{{\App\CPU\translate('filter2')}}</span>
                                <div class="price_slider_amount">
                                    <div style="width: 40%">
                                        <input style="background: #ffffff;"
                                               class="cz-filter-search form-control form-control-sm appended-form-control"
                                               type="number" name="min_price" value="0" min="0" max="1000000" id="min_price">

                                    </div>
                                    <div style="width: 20%; padding-right: 20px;" >
                                        <h3 style="margin-top:6px;">{{\App\CPU\translate('to')}}</h3>
                                    </div>
                                    <div style="width: 40%">
                                        <input style="background: #ffffff;" value="100" min="100" max="1000000"
                                               class="cz-filter-search form-control form-control-sm appended-form-control"
                                               type="number" name="max_price" id="max_price">

                                    </div>
                                    <button class="button" type="submit" style="justify-content: center">{{\App\CPU\translate('filter')}}</button>
                                </div>

                            </div>
                        </form>


                    </div>

                </div>
                @else
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
                            <span class="gamma widget-title">{{\App\CPU\translate('filter')}}</span>
                            <form action="{{route('pro.product.search')}}" method="post">
                                @csrf
                                <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">

                                    <span class="gamma widget-title">{{\App\CPU\translate('filter2')}}</span>
                                    <div class="price_slider_amount">
                                        <div style="width: 40%">
                                            <input style="background: #ffffff;"
                                                   class="cz-filter-search form-control form-control-sm appended-form-control"
                                                   type="number" name="min_price" value="0" min="0" max="1000000" id="min_price">

                                        </div>
                                        <div style="width: 20%; padding-right: 20px;" >
                                            <h3 style="margin-top:6px;">{{\App\CPU\translate('to')}}</h3>
                                        </div>
                                        <div style="width: 40%">
                                            <input style="background: #ffffff;" value="100" min="100" max="1000000"
                                                   class="cz-filter-search form-control form-control-sm appended-form-control"
                                                   type="number" name="max_price" id="max_price">

                                        </div>
                                        <button class="button" type="submit" style="justify-content: center">{{\App\CPU\translate('filter')}}</button>
                                    </div>

                                </div>
                            </form>


                        </div>

                    </div>
                @endif
                <!-- #secondary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
@endsection
