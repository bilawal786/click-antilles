<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <style>

        .site-header .site-branding {
            margin-bottom: 1.533em;
            margin-top: -10px;
        }
        .dropdown-toggle:after {
            float: right!important;
        }
        @media (min-width: 1200px)
            .page-template-template-homepage-v1 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v6 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v6 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v6 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v6 .departments-menu > .dropdown-menu {
                display: none !important;

    </style>
    <meta charset="UTF-8">
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Click Antilles</title>

    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/bootstrap.min.css')}}" media="all"/>

    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/font-awesome.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/bootstrap-grid.min.css')}}"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/bootstrap-reboot.min.css')}}"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/font-techmarket.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/slick.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/techmarket-font-awesome.css')}}"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/slick-style.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/animate.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/style.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/web/assets/css/colors/blue.css')}}" media="all"/>
    {{--Toastr--}}
    <script src={{asset("public/assets/back-end/js/toastr.js")}}></script>
    <link rel="stylesheet" href="{{asset('public/assets/back-end')}}/css/toastr.css"/>

    {!! Toastr::message() !!}

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('public/web/assets/logo click antilles.png')}}">

</head>
<?php
$category = \App\Model\Category::with(['childes.childes'])->where('position', 0)->priority()->paginate(11);
?>

@if(request()->is('product/single*'))
    <body class="woocommerce-active single-product full-width normal">
    @elseif(request()->is('all-product*') || request()->is('product/search*') || request()->is('app/search/product/*') || request()->is('pro/product*') || request()->is('pro/product/search*') || request()->is('pro/search/product/*'))
        <body class="woocommerce-active left-sidebar  can-uppercase">
    @else
        <body class="woocommerce-active page-template-template-homepage-v1 can-uppercase">
        @endif
        <div class="hfeed site" id="page">
            <div class="top-bar top-bar-v1">
                <div class="col-full">
                    <ul id="menu-top-bar-left" class="nav justify-content-center">
                        <li class="menu-item animate-dropdown">
                            <a title="TechMarket eCommerce - Always free delivery" href="{{route('terms-condition')}}">{{\App\CPU\translate('terms')}}</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Quality Guarantee of products" href="{{route('all-product')}}">{{\App\CPU\translate('quality')}}</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Fast returnings program" href="{{route('faq')}}">{{\App\CPU\translate('faq')}}</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="No additional fees" href="{{route('privacy')}}">{{\App\CPU\translate('condition')}}</a>
                        </li>
                        @php( $local = \App\CPU\Helpers::default_lang())
                        <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                            <a title="Dollar (US)" data-toggle="dropdown" class="dropdown-toggle" href="#">
                                @foreach(json_decode($language['value'],true) as $data)
                                    @if($data['code']==$local)
                                        <img class="{{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}}" width="20"
                                             src="{{asset('public/assets/front-end')}}/img/flags/{{$data['code']}}.png"
                                             alt="Eng">
                                        <span style="text-transform: capitalize">{{$data['name']}}</span>
                                    @endif
                                @endforeach
                            </a>
                            <ul role="menu" class="dropdown-menu">
                                @foreach(json_decode($language['value'],true) as $key =>$data)
                                    @if($data['status']==1)
                                <li class="menu-item animate-dropdown">
                                    <a title="AUD" href="{{route('lang',[$data['code']])}}">
                                        <img style="display: unset!important;" class="{{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}}"

                                             src="{{asset('public/assets/front-end')}}/img/flags/{{$data['code']}}.png"
                                             alt="{{$data['name']}}"/>
                                        <span style="text-transform: capitalize">{{$data['name']}}</span>
                                    </a>
                                </li>
                                    @endif
                                @endforeach

                            </ul>
                            <!-- .dropdown-menu -->
                        </li>

                    </ul>
                    <!-- .nav -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- .top-bar-v1 -->
            <header id="masthead" class="site-header header-v1" style="background-image: none; ">
                <div class="col-full desktop-only">
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <div class="site-branding">
                                <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                                    <img src="{{asset('public/web/assets/logo click antilles.png')}}">
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation"
                                 data-nav="flex-menu">
                                <ul id="menu-primary-menu" class="nav yamm">
                                    <li class="{{request()->is('/*') ? 'sale-clr': ''}} yamm-fw menu-item animate-dropdown">
                                        <a title="Super deals" href="{{route('home')}}">{{ \App\CPU\translate('Home')}}</a>
                                    </li>
                                    <li class="menu-item  menu-item-has-children animate-dropdown {{request()->is('about*') ? 'sale-clr': ''}} ">
                                        <a title="Mother`s Day"  href="{{route('about')}}">{{\App\CPU\translate('about_us')}} </a>

                                    </li>
                                    <li class="yamm-fw menu-item menu-item-has-children animate-dropdown {{request()->is('all-product*') || request()->is('product/search*') ? 'sale-clr': ''}}">
                                        <a title="Pages"  href="{{route('all-product')}}">{{\App\CPU\translate('discounted_products')}}</a>

                                    </li>
                                    @if(auth('customer')->check())
                                        @if(auth('customer')->user()->role==2)
                                        <li class="yamm-fw menu-item menu-item-has-children animate-dropdown {{request()->is('pro/product/*')  ? 'sale-clr': ''}}">
                                            <a title="Pages"  href="{{route('pro-product')}}">{{\App\CPU\translate('sourcing_product')}}</a>

                                        </li>
                                        @endif
                                        <li class="menu-item menu-item-has-children animate-dropdown dropdown {{request()->is('account-oder*') || request()->is('user-accountt*') || request()->is('wishlistss*') ? 'sale-clr': ''}}">
                                            <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">{{\App\CPU\translate('Account')}} <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item animate-dropdown">
                                                    <a title="Wishlist" href="{{route('user-accountt')}}">{{\App\CPU\translate('my_profile')}}</a>
                                                </li>
                                                <li class="menu-item animate-dropdown">
                                                    <a title="Wishlist" href="{{route('account-oder')}}">{{\App\CPU\translate('my_order')}}</a>
                                                </li>
                                                <li class="menu-item animate-dropdown">
                                                    <a title="Add to compare" href="{{route('customer.auth.logout')}}"> {{\App\CPU\translate('logout')}}</a>
                                                </li>

                                            </ul>
                                            <!-- .dropdown-menu -->
                                        </li>

                                    @else
                                        <li class="menu-item animate-dropdown {{request()->is('customer/auth/login*') ? 'sale-clr': ''}}">
                                            <a href="{{route('customer.auth.login')}}">{{\App\CPU\translate('Login')}}</a>
                                        </li>
                                        <li class="menu-item animate-dropdown {{request()->is('/pro/login*') ? 'sale-clr': ''}}">
                                            <a href="{{route('login')}}">{{\App\CPU\translate('pro_user')}}</a>
                                        </li>
                                    @endauth

                                </ul>
                            </nav>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->

                    <div class="row align-items-center">

                        @if(request()->is('/') )
                            <div id="departments-menu" class="dropdown departments-menu">
                                <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <i class="tm tm-departments-thin"></i>
                                    <span>{{\App\CPU\translate('category')}}</span>
                                </button>

                                <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                                    @foreach($category as $cat)
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="{{$cat->name}}" class="dropdown-toggle"
                                               aria-haspopup="true" href="{{route('all-product',['id'=>$cat->id,'position'=>1])}}">{{$cat->name}} <span class="caret"></span></a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                    <div class="yamm-content">
                                                        <div
                                                            class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                            <div class="kc-col-container">
                                                                <div class="kc_single_image">
                                                                    <img
                                                                        src="{{asset('public/web/assets/images/megamenu.jpg')}}"
                                                                        class="" alt=""/>
                                                                </div>
                                                                <!-- .kc_single_image -->
                                                            </div>
                                                            <!-- .kc-col-container -->
                                                        </div>
                                                        <!-- .bg-yamm-content -->
                                                        <div class="row yamm-content-row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_text_block">
                                                                        <?php $key = 0; ?>
                                                                        <ul>
                                                                            @if($cat->childes->count()>0)
                                                                                @foreach($cat['childes']  as $sub)
                                                                                   <a href="{{route('all-product',['id'=>$sub->id,'position'=>2])}}"> <li class="nav-title">{{$sub->name}}</li></a>
                                                                                @endforeach
                                                                            @endif

                                                                        </ul>
                                                                    </div>
                                                                    <!-- .kc_text_block -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>

                                                        </div>
                                                        <!-- .kc_row -->
                                                    </div>
                                                    <!-- .yamm-content -->
                                                </li>
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else

                        @endif

                        <!-- .departments-menu -->

                        <form class="navbar-search" method="post" action="{{route('product.search')}}">
                            @csrf
                            <label class="sr-only screen-reader-text" for="search">{{\App\CPU\translate('rech')}}:</label>
                            <div class="input-group">
                                <input type="text" id="search" class="form-control search-field product-search-field"
                                       dir="ltr" value="" name="name" placeholder="{{\App\CPU\translate('Search Product Name')}}"/>
                                <div class="input-group-addon search-categories popover-header">
                                    <select name='category_id' id='product_cat' class='postform resizeselect'>
                                        <option value='' selected='selected'>{{\App\CPU\translate('All Categories')}}</option>
                                        @foreach($category as $row )
                                            <option class="level-0" value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <!-- .input-group-addon -->
                                <div class="input-group-btn input-group-append">
                                    <input type="hidden" id="search-param" name="post_type" value="product"/>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                        <span class="search-btn">{{\App\CPU\translate('Search')}}</span>
                                    </button>
                                </div>
                                <!-- .input-group-btn -->
                            </div>
                            <!-- .input-group -->
                        </form>

                        <ul class="header-wishlist nav navbar-nav">
                            <li class="nav-item">
                                <a href="{{route('wishlistss')}}" class="nav-link">
                                    <i class="tm tm-favorites"></i>
                                    <?php $wishlist = \App\Model\Wishlist::where('customer_id', auth('customer')->id())->count();?>
                                    <span id="top-cart-wishlist-count" class=" value count countWishlist">{{session()->has('wish_list')?count(session('wish_list')):0}}</span>

                                </a>
                            </li>
                        </ul>
                        <!-- .header-wishlist -->
                        <ul id="cart_items" class="site-header-cart menu">
                            <li class="animate-dropdown dropdown ">
                                <a class="cart-contents" href="#" data-toggle="dropdown"
                                   title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    @php($cart=\App\CPU\CartManager::get_cart())

                                    <span class="count"> {{$cart->count()}}</span>
                                    <span class="amount">
                                        <span class="price-label">Votre panier</span> {{\App\CPU\Helpers::currency_converter(\App\CPU\CartManager::cart_total_applied_discount(\App\CPU\CartManager::get_cart()))}}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-mini-cart">
                                    <li>
                                        <div class="widget woocommerce widget_shopping_cart">
                                            <div class="widget_shopping_cart_content">
                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    @php($sub_total=0)
                                                    @php($total_tax=0)
                                                    @if($cart->count() > 0)

                                                        @foreach($cart as  $cartItem)
                                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                                <a href="#" class="remove" aria-label="Remove this item"
                                                                   data-product_id="65" data-product_sku=""
                                                                   onclick="removeFromCart({{ $cartItem['id'] }})">×</a>
                                                                <a href="#">
                                                                    <img
                                                                        onerror="this.src='{{asset('public/assets/front-end/img/image-place-holder.png')}}'"
                                                                        src="{{\App\CPU\ProductManager::product_image_path('thumbnail')}}/{{$cartItem['thumbnail']}}"
                                                                        class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                        alt="">{{Str::limit($cartItem['name'],30)}}
                                                                    &nbsp;
                                                                </a>
                                                                <span class="quantity">{{$cartItem['quantity']}} ×
                                                            <span class="woocommerce-Price-amount amount">
                                                               {{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
                                                        </span>
                                                            </li>
                                                            @php($sub_total+=($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
                                                            @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
                                                        @endforeach
                                                    @endif

                                                </ul>
                                                <!-- .cart_list -->
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Total:</strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="{{route('product-cart')}}" class="button wc-forward">{{\App\CPU\translate('basket')}}</a>
                                                    <a href="{{route('product-checkout')}}" class="button checkout wc-forward">{{\App\CPU\translate('check')}}</a>
                                                </p>
                                            </div>
                                            <!-- .widget_shopping_cart_content -->
                                        </div>
                                        <!-- .widget_shopping_cart -->
                                    </li>
                                </ul>
                                <!-- .dropdown-menu-mini-cart -->
                            </li>
                        </ul>
                        <!-- .site-header-cart -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- .col-full -->
                <div class="col-full handheld-only">
                    <div class="handheld-header">
                        <div class="row">
                            <div class="site-branding">
                                <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                                    <img src="{{asset('public/web/assets/logo click antilles.png')}}">
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <div class="handheld-header-links">
                                <ul class="columns-3">
                                    <li class="my-account">
                                        <a href="#" class="has-icon">
                                            <i class="tm tm-login-register"></i>
                                        </a>
                                    </li>
                                    <li class="wishlist">
                                        <a href="#" class="has-icon">
                                            <i class="tm tm-favorites"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                    <li class="compare">
                                        <a href="#" class="has-icon">
                                            <i class="tm tm-compare"></i>
                                            <span class="count">3</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- .columns-3 -->
                            </div>
                            <!-- .handheld-header-links -->
                        </div>
                        <!-- /.row -->
                        <div class="techmarket-sticky-wrap">
                            <div class="row">
                                <nav id="handheld-navigation" class="handheld-navigation"
                                     aria-label="Handheld Navigation">
                                    <button class="btn navbar-toggler" type="button">
                                        <i class="tm tm-departments-thin"></i>
                                        <span>Menu</span>
                                    </button>
                                    <div class="handheld-navigation-menu">
                                        <span class="tmhm-close">{{\App\CPU\translate('Close')}}</span>
                                        <ul id="menu-departments-menu-1" class="nav">
                                            <li class="highlight menu-item animate-dropdown">
                                                <a title="Value of the Day" href="#"></a>Valeur du jour
                                            </li>
                                            <li class="highlight menu-item animate-dropdown">
                                                <a title="Top 100 Offers" href="#">100 meilleures offres</a>
                                            </li>
                                            <li class="highlight menu-item animate-dropdown">
                                                <a title="New Arrivals" href="#">Nouvelles Arrivées</a>
                                            </li>
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="Computers &amp; Laptops" data-toggle="dropdown"
                                                   class="dropdown-toggle" aria-haspopup="true" href="#">Computers
                                                    &#038; Laptops <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div
                                                                class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img
                                                                            src="{{asset('public/web/assets/images/megamenu.jpg')}}"
                                                                            class="" alt=""/>
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Des ordinateurs
                                                                                    &amp; Accessoire
                                                                                </li>
                                                                                <li><a href="#">Tous les ordinateurs
                                                                                        &amp; Accessoires</a></li>
                                                                                <li><a href="#">Ordinateurs portables,
                                                                                        ordinateurs de bureau &amp;
                                                                                        Moniteurs</a></li>
                                                                                <li><a href="#">Imprimantes &amp;
                                                                                        Ink</a></li>
                                                                                <li><a href="#">La mise en réseau &amp;
                                                                                        Appareils Internet</a></li>
                                                                                <li><a href="#">Accessoires
                                                                                        informatiques</a></li>
                                                                                <li><a href="#">Logiciel</a></li>
                                                                                <li class="nav-divider"></li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <span class="nav-text">Tout l'électronique</span>
                                                                                        <span class="nav-subtext">Découvrez plus de produits</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Bureau &amp;
                                                                                    Papeterie
                                                                                </li>
                                                                                <li><a href="#">Tous les bureaux &amp;
                                                                                        Papeterie</a></li>
                                                                                <li><a href="#">Des stylos &amp;
                                                                                        L'écriture</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="Cameras &amp; Photo" data-toggle="dropdown"
                                                   class="dropdown-toggle" aria-haspopup="true" href="#">Cameras &#038;
                                                    Photo <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div
                                                                class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img
                                                                            src="{{asset('public/web/assets/images/megamenu-1.jpg')}}"
                                                                            class="" alt=""/>
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Des ordinateurs
                                                                                    &amp; Accessoire
                                                                                </li>
                                                                                <li><a href="#">Tous les ordinateurs
                                                                                        &amp; Accessoires</a></li>
                                                                                <li><a href="#">Ordinateurs portables,
                                                                                        ordinateurs de bureau &amp;
                                                                                        Moniteurs</a></li>
                                                                                <li><a href="#">Imprimantes &amp;
                                                                                        Ink</a></li>
                                                                                <li><a href="#">La mise en réseau &amp;
                                                                                        Appareils Internet</a></li>
                                                                                <li><a href="#">Accessoires
                                                                                        informatiques</a></li>
                                                                                <li><a href="#">Logiciel</a></li>
                                                                                <li class="nav-divider"></li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <span class="nav-text">Tout l'électronique</span>
                                                                                        <span class="nav-subtext">Découvrez plus de produits</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Audio Video</li>
                                                                                <li><a href="#">Tout l'audio et la
                                                                                        vidéo</a></li>
                                                                                <li><a href="#">Écouteurs et
                                                                                        haut-parleurs</a></li>
                                                                                <li><a href="#">Systèmes de
                                                                                        divertissement à domicile</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="Smart Phones &amp; Tablets" data-toggle="dropdown"
                                                   class="dropdown-toggle" aria-haspopup="true" href="#">Smart Phones
                                                    &#038; Tablets <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div
                                                                class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img
                                                                            src="{{asset('public/web/assets/images/megamenu.jpg')}}"
                                                                            class="" alt=""/>
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Des ordinateurs
                                                                                    &amp; Accessoires
                                                                                </li>
                                                                                <li><a href="#">Tous les ordinateurs
                                                                                        &amp; Accessoires</a></li>
                                                                                <li><a href="#">Ordinateurs portables,
                                                                                        ordinateurs de bureau &amp;
                                                                                        Moniteurs</a></li>
                                                                                <li><a href="#">Imprimantes &amp;
                                                                                        Ink</a></li>
                                                                                <li><a href="#">La mise en réseau &amp;
                                                                                        Appareils Internet</a></li>
                                                                                <li><a href="#">Accessoires
                                                                                        informatiques</a></li>
                                                                                <li><a href="#">Logiciel</a></li>
                                                                                <li class="nav-divider"></li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <span class="nav-text">Tout l'électronique</span>
                                                                                        <span class="nav-subtext">Découvrez plus de produits</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Bureau &amp;
                                                                                    Papeterie
                                                                                </li>
                                                                                <li><a href="#">Tous les bureaux &amp;
                                                                                        Papeterie</a></li>
                                                                                <li><a href="#">Des stylos &amp;
                                                                                        L'écriture</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="Video Games &amp; Consoles" data-toggle="dropdown"
                                                   class="dropdown-toggle" aria-haspopup="true" href="#">Video Games
                                                    &#038; Consoles <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div
                                                                class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img
                                                                            src="{{asset('public/web/assets/images/megamenu-1.jpg')}}"
                                                                            class="" alt=""/>
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Cameras &
                                                                                    Photography
                                                                                </li>
                                                                                <li><a href="#">All Cameras &
                                                                                        Photography</a></li>
                                                                                <li><a href="#">Point & Shoot
                                                                                        Cameras</a></li>
                                                                                <li><a href="#">Lenses</a></li>
                                                                                <li><a href="#">Camera Accessories</a>
                                                                                </li>
                                                                                <li><a href="#">Security &
                                                                                        Surveillance</a></li>
                                                                                <li><a href="#">Binoculars &
                                                                                        Telescopes</a></li>
                                                                                <li><a href="#">Camcorders</a></li>
                                                                                <li class="nav-divider"></li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <span class="nav-text">All Electronics</span>
                                                                                        <span class="nav-subtext">Discover more products</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Audio Video</li>
                                                                                <li><a href="#">Tout l'audio et la
                                                                                        vidéo</a></li>
                                                                                <li><a href="#">Écouteurs et
                                                                                        haut-parleurs</a></li>
                                                                                <li><a href="#">Systèmes de
                                                                                        divertissement à domicile</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="TV &amp; Audio" data-toggle="dropdown" class="dropdown-toggle"
                                                   aria-haspopup="true" href="#">TV &#038; Audio <span
                                                        class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div
                                                                class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img
                                                                            src="{{asset('public/web/assets/images/megamenu.jpg')}}"
                                                                            class="" alt=""/>
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Des ordinateurs
                                                                                    &amp; Accessoires
                                                                                </li>
                                                                                <li><a href="#">Tous les ordinateurs
                                                                                        &amp; Accessoires</a></li>
                                                                                <li><a href="#">Ordinateurs portables,
                                                                                        ordinateurs de bureau &amp;
                                                                                        Moniteurs</a></li>
                                                                                <li><a href="#">Imprimantes &amp;
                                                                                        Ink</a></li>
                                                                                <li><a href="#">La mise en réseau &amp;
                                                                                        Appareils Internet</a></li>
                                                                                <li><a href="#">Accessoires
                                                                                        informatiques</a></li>
                                                                                <li><a href="#">Logiciel</a></li>
                                                                                <li class="nav-divider"></li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <span class="nav-text">Tout l'électronique</span>
                                                                                        <span class="nav-subtext">Découvrez plus de produits</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Bureau &amp;
                                                                                    Papeterie
                                                                                </li>
                                                                                <li><a href="#">Tous les bureaux &amp;
                                                                                        Papeterie</a></li>
                                                                                <li><a href="#">Des stylos &amp;
                                                                                        L'écriture</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="Car Electronic &amp; GPS" data-toggle="dropdown"
                                                   class="dropdown-toggle" aria-haspopup="true" href="#">Voiture
                                                    Électronique &#038; GPS <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div
                                                                class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img
                                                                            src="{{asset('public/web/assets/images/megamenu-1.jpg')}}"
                                                                            class="" alt=""/>
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Cameras &
                                                                                    Photography
                                                                                </li>
                                                                                <li><a href="#">All Cameras &
                                                                                        Photography</a></li>
                                                                                <li><a href="#">Point & Shoot
                                                                                        Cameras</a></li>
                                                                                <li><a href="#">Lenses</a></li>
                                                                                <li><a href="#">Camera Accessories</a>
                                                                                </li>
                                                                                <li><a href="#">Security &
                                                                                        Surveillance</a></li>
                                                                                <li><a href="#">Binoculars &
                                                                                        Telescopes</a></li>
                                                                                <li><a href="#">Camcorders</a></li>
                                                                                <li class="nav-divider"></li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <span class="nav-text">All Electronics</span>
                                                                                        <span class="nav-subtext">Discover more products</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Audio Video</li>
                                                                                <li><a href="#">Tout l'audio et la
                                                                                        vidéo</a></li>
                                                                                <li><a href="#">Écouteurs et
                                                                                        haut-parleurs</a></li>
                                                                                <li><a href="#">Systèmes de
                                                                                        divertissement à domicile</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                                <a title="Accesories" data-toggle="dropdown" class="dropdown-toggle"
                                                   aria-haspopup="true" href="#">Accesories <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                                        <div class="yamm-content">
                                                            <div
                                                                class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                                <div class="kc-col-container">
                                                                    <div class="kc_single_image">
                                                                        <img
                                                                            src="{{asset('public/web/assets/images/megamenu.jpg')}}"
                                                                            class="" alt=""/>
                                                                    </div>
                                                                    <!-- .kc_single_image -->
                                                                </div>
                                                                <!-- .kc-col-container -->
                                                            </div>
                                                            <!-- .bg-yamm-content -->
                                                            <div class="row yamm-content-row">
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Des ordinateurs
                                                                                    &amp; Accessoires
                                                                                </li>
                                                                                <li><a href="#">Tous les ordinateurs
                                                                                        &amp; Accessoires</a></li>
                                                                                <li><a href="#">Ordinateurs portables,
                                                                                        ordinateurs de bureau &amp;
                                                                                        Moniteurs</a></li>
                                                                                <li><a href="#">Imprimantes &amp;
                                                                                        Ink</a></li>
                                                                                <li><a href="#">La mise en réseau &amp;
                                                                                        Appareils Internet</a></li>
                                                                                <li><a href="#">Accessoires
                                                                                        informatiques</a></li>
                                                                                <li><a href="#">Logiciel</a></li>
                                                                                <li class="nav-divider"></li>
                                                                                <li>
                                                                                    <a href="#">
                                                                                        <span class="nav-text">Tout l'électronique</span>
                                                                                        <span class="nav-subtext">Découvrez plus de produits</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                                <div class="col-md-6 col-sm-12">
                                                                    <div class="kc-col-container">
                                                                        <div class="kc_text_block">
                                                                            <ul>
                                                                                <li class="nav-title">Bureau &amp;
                                                                                    Papeterie
                                                                                </li>
                                                                                <li><a href="#">Tous les bureaux &amp;
                                                                                        Papeterie</a></li>
                                                                                <li><a href="#">Des stylos &amp;
                                                                                        L'écriture</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- .kc_text_block -->
                                                                    </div>
                                                                    <!-- .kc-col-container -->
                                                                </div>
                                                                <!-- .kc_column -->
                                                            </div>
                                                            <!-- .kc_row -->
                                                        </div>
                                                        <!-- .yamm-content -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item animate-dropdown">
                                                <a title="Gadgets" href="#">Gadgets</a>
                                            </li>
                                            <li class="menu-item animate-dropdown">
                                                <a title="Virtual Reality" href="#">Virtual Reality</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .handheld-navigation-menu -->
                                </nav>
                                <!-- .handheld-navigation -->
                                <div class="site-search">
                                    <div class="widget woocommerce widget_product_search">
                                        <form role="search" method="get" class="woocommerce-product-search" action="#">
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">{{\App\CPU\translate('rech')}}:</label>
                                            <input type="search" id="woocommerce-product-search-field-0"
                                                   class="search-field" placeholder="Recherche de produits&hellip;"
                                                   value="" name="s"/>
                                            <input type="submit" value="Search"/>
                                            <input type="hidden" name="post_type" value="product"/>
                                        </form>
                                    </div>
                                    <!-- .widget -->
                                </div>
                                <!-- .site-search -->
                                <a class="handheld-header-cart-link has-icon" href="#" title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="count">2</span>
                                </a>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- .techmarket-sticky-wrap -->
                    </div>
                    <!-- .handheld-header -->
                </div>
                <!-- .handheld-only -->
            </header>
            <!-- .header-v1 -->
            <!-- .header-v1 -->
            <!-- ============================================================= Header End ============================================================= -->
            @yield('content')
            <!-- #content -->
            <footer class="site-footer footer-v1">
                <div class="col-full">
                    <div class="before-footer-wrap">
                        <div class="col-full">
                            <div class="footer-newsletter">
                                <div class="media">
                                    <i class="footer-newsletter-icon tm tm-newsletter"></i>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <div class="newsletter-header">
                                                <h5 class="newsletter-title">{{\App\CPU\translate('newsel')}}</h5>
                                                <span class="newsletter-marketing-text">...{{\App\CPU\translate('et')}}
                                                    <strong>{{\App\CPU\translate('20euro')}}</strong>
                                                </span>
                                            </div>
                                            <!-- .newsletter-header -->
                                            <div class="newsletter-body">
                                                <form class="newsletter-form">
                                                    <input type="text" placeholder="Enter your email address">
                                                    <button class="button" type="button">{{\App\CPU\translate('Register')}}</button>
                                                </form>
                                            </div>
                                            <!-- .newsletter body -->
                                        </div>
                                        <!-- .clearfix -->
                                    </div>
                                    <!-- .media-body -->
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .footer-newsletter -->
                            <div class="footer-social-icons">
                                <ul class="social-icons nav">
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-facebook"></i> Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-twitter"></i> Twitter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="sm-icon-label-link nav-link" href="#">
                                            <i class="fa fa-google-plus"></i> Google+</a>
                                    </li>

                                </ul>
                            </div>
                            <!-- .footer-social-icons -->
                        </div>
                        <!-- .col-full -->
                    </div>
                    <!-- .before-footer-wrap -->
                    <div class="footer-widgets-block">
                        <div class="row">
                            <div class="footer-contact">
                                <div class="footer-logo">

                                        <a href="{{route('home')}}" class="custom-logo-link" rel="home">
                                            <img src="{{asset('public/web/assets/logo click antilles.png')}}">
                                        </a>

                                </div>
                                <!-- .footer-logo -->
                                <div class="contact-payment-wrap">
                                    <div class="footer-contact-info">
                                        <div class="media">
                                            <span class="media-left icon media-middle">
                                                <i class="tm tm-call-us-footer"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="call-us-title">{{\App\CPU\translate('Got Questions ? Call us')}} 24/7!</span>
                                                <span class="call-us-text">(800) 8001-8588, (0600) 874 548</span>
                                                <address class="footer-contact-address">{{\App\CPU\translate('17 Princess Road, London, Greater London NW1 8JR, UK')}}</address>
                                                <a href="#" class="footer-address-map-link">
                                                    <i class="tm tm-map-marker"></i>{{\App\CPU\translate('Find us on map')}}</a>
                                            </div>
                                            <!-- .media-body -->
                                        </div>
                                        <!-- .media -->
                                    </div>
                                    <!-- .footer-contact-info -->
                                    <div class="footer-payment-info">
                                        <div class="media">
                                            <span class="media-left icon media-middle">
                                                <i class="tm tm-safe-payments"></i>
                                            </span>
                                            <div class="media-body">
                                                <h5 class="footer-payment-info-title">{{\App\CPU\translate('We are using safe payments')}}</h5>
                                                <div class="footer-payment-icons">
                                                    <ul class="list-payment-icons nav">
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="{{asset('public/web/assets/images/credit-cards/mastercard.svg')}}" alt="mastercard" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="{{asset('public/web/assets/images/credit-cards/visa.svg')}}" alt="visa" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="{{asset('public/web/assets/images/credit-cards/paypal.svg')}}" alt="paypal" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="payment-icon-image" src="{{asset('public/web/assets/images/credit-cards/maestro.svg')}}" alt="maestro" />
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .footer-payment-icons -->
                                                <div class="footer-secure-by-info">
                                                    <h6 class="footer-secured-by-title">{{\App\CPU\translate('Secured by')}}:</h6>
                                                    <ul class="footer-secured-by-icons">
                                                        <li class="nav-item">
                                                            <img class="secure-icons-image" src="{{asset('public/web/assets/images/secured-by/norton.svg')}}" alt="norton" />
                                                        </li>
                                                        <li class="nav-item">
                                                            <img class="secure-icons-image" src="{{asset('public/web/assets/images/secured-by/mcafee.svg')}}" alt="mcafee" />
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- .footer-secure-by-info -->
                                            </div>
                                            <!-- .media-body -->
                                        </div>
                                        <!-- .media -->
                                    </div>
                                    <!-- .footer-payment-info -->
                                </div>
                                <!-- .contact-payment-wrap -->
                            </div>
                            <!-- .footer-contact -->
                            <div class="footer-widgets">
                                <div class="columns">
                                    <aside class="widget clearfix">
                                        <div class="body">
                                            <h4 class="widget-title">{{\App\CPU\translate('Find it Fast')}}</h4>
                                            <div class="menu-footer-menu-1-container">
                                                <ul id="menu-footer-menu-1" class="menu">
                                                    @foreach($category as $key=>$row)
                                                       @if($key+1<10)
                                                    <li class="menu-item">
                                                        <a href="">{{$row->name}}  </a>
                                                    </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </div>
                                            <!-- .menu-footer-menu-1-container -->
                                        </div>
                                        <!-- .body -->
                                    </aside>
                                    <!-- .widget -->
                                </div>
                                <!-- .columns -->
                                <div class="columns">
                                    <aside class="widget clearfix">
                                        <div class="body">
                                            <h4 class="widget-title">&nbsp;</h4>
                                            <div class="menu-footer-menu-2-container">
                                                <ul id="menu-footer-menu-2" class="menu">
                                                    @foreach($category as $key=>$cat)
                                                        @if($cat->childes->count()>0)
                                                            @foreach($cat['childes']  as $check=>$sub)
                                                                @if($check<1)
                                                                <li class="menu-item">
                                                                    <a href="">{{$sub->name}}  </a>
                                                                </li>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- .menu-footer-menu-2-container -->
                                        </div>
                                        <!-- .body -->
                                    </aside>
                                    <!-- .widget -->
                                </div>
                                <!-- .columns -->
                                <div class="columns">
                                    <aside class="widget clearfix">
                                        <div class="body">
                                            <h4 class="widget-title">{{\App\CPU\translate('Customer Care')}}</h4>
                                            <div class="menu-footer-menu-3-container">
                                                <ul id="menu-footer-menu-3" class="menu">

                                                    @if(auth('customer')->check())
                                                    <li class="menu-item">
                                                        <a href="{{route('user-accountt')}}">{{\App\CPU\translate('Account')}}</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="#">{{\App\CPU\translate('track_order')}}</a>
                                                    </li>
                                                    @else
                                                        <li class="menu-item">
                                                            <a href="{{route('customer.auth.login')}}">{{\App\CPU\translate('Login')}}</a>
                                                        </li>
                                                    @endif
                                                    <li class="menu-item">
                                                        <a href="{{route('wishlistss')}}">{{\App\CPU\translate('My Wishlists')}}</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{route('about')}}">{{\App\CPU\translate('About Us')}}</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="{{route('faq')}}">{{\App\CPU\translate('faq')}}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- .menu-footer-menu-3-container -->
                                        </div>
                                        <!-- .body -->
                                    </aside>
                                    <!-- .widget -->
                                </div>
                                <!-- .columns -->
                            </div>
                            <!-- .footer-widgets -->
                        </div>
                        <!-- .row -->
                    </div>

                    <!-- .footer-widgets-block -->
                    <div class="site-info">
                        <div class="col-full">
                            <div class="copyright">{{\App\CPU\translate('copy')}} &copy; 2022 <a href="#">Click Antilles</a> {{\App\CPU\translate('tstt')}}
                            </div>
                            <!-- .copyright -->
                            <div class="credit">{{\App\CPU\translate('avc')}}
                                <i class="fa fa-heart"></i> {{\App\CPU\translate('par')}} Click Antilles.
                            </div>
                            <!-- .credit -->
                        </div>
                        <!-- .col-full -->
                    </div>
                    <!-- .site-info -->
                </div>
                <!-- .col-full -->
            </footer>
            <!-- .site-footer -->
        </div>


        <script type="text/javascript" src="{{asset('public/web/assets/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/jquery-migrate.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/hidemaxlistitem.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/hidemaxlistitem.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/jquery.easing.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/scrollup.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/jquery.waypoints.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/waypoints-sticky.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/web/assets/js/scripts.js')}}"></script>
        {{--Toastr--}}
        <script src={{asset("public/assets/back-end/js/toastr.js")}}></script>

        <script src="{{asset('public/assets/front-end')}}/js/sweet_alert.js"></script>
        {{--Toastr--}}
        <script src={{asset("public/assets/back-end/js/toastr.js")}}></script>
        {!! Toastr::message() !!}


        <script>
            function removeFromCart(key) {

                $.post('{{ route('cart.remove') }}', {_token: '{{ csrf_token() }}', key: key}, function (response) {
                    console.log(response)
                    updateNavCart();
                    $('#cart-summary').empty().html(response.data);
                    toastr.info('{{\App\CPU\translate('Item has been removed from cart')}}', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                });
            }

            function checkAddToCartValidity() {
                var names = {};
                $('#add-to-cart-form input:radio').each(function () { // find unique names
                    names[$(this).attr('name')] = true;
                });
                var count = 0;
                $.each(names, function () { // then count them
                    count++;
                });
                if ($('input:radio:checked').length == count) {
                    return true;
                }
                return false;
            }

            function updateNavCart() {
                $.post('{{route('nav.cart')}}', {_token: '{{csrf_token()}}'}, function (response) {
                    $('#cart_items').html(response.data);
                });
            }

            function addToCart(form_id = 'add-to-cart-form', redirect_to_checkout = false) {

                if (checkAddToCartValidity()) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.post({
                        url: '{{ route('cart.add') }}',
                        data: $('#' + form_id).serializeArray(),
                        beforeSend: function () {
                            $('#loading').show();
                        },
                        success: function (response) {

                            console.log(response);
                            if (response.status == 1) {
                                updateNavCart();
                                toastr.success(response.message, {
                                    CloseButton: true,
                                    ProgressBar: true
                                });
                                $('.call-when-done').click();
                                if (redirect_to_checkout) {
                                    location.href = "{{route('product-checkout')}}";
                                }
                                return false;
                            } else if (response.status == 0) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Cart',
                                    text: response.message
                                });
                                return false;
                            }
                        },
                        complete: function () {
                            $('#loading').hide();

                        }
                    });
                } else {
                    Swal.fire({
                        type: 'info',
                        title: 'Cart',
                        text: '{{\App\CPU\translate('please_choose_all_the_options')}}'
                    });
                }
            }

            function cartQuantityInitialize() {

                $('.btn-number').click(function (e) {
                    e.preventDefault();

                    fieldName = $(this).attr('data-field');
                    type = $(this).attr('data-type');

                    var input = $("input[name='" + fieldName + "']");
                    var currentVal = parseInt(input.val());

                    if (!isNaN(currentVal)) {
                        if (type == 'minus') {

                            if (currentVal > input.attr('min')) {
                                input.val(currentVal - 1).change();
                            }
                            if (parseInt(input.val()) == input.attr('min')) {
                                $(this).attr('disabled', true);
                            }

                        } else if (type == 'plus') {
                            if (currentVal < input.attr('max')) {
                                input.val(currentVal + 1).change();
                            }
                            if (parseInt(input.val()) == input.attr('max')) {
                                $(this).attr('disabled', true);
                            }

                        }
                    } else {
                        input.val(0);
                    }
                });

                $('.input-number').focusin(function () {
                    $(this).data('oldValue', $(this).val());
                });

                $('.input-number').change(function () {

                    minValue = parseInt($(this).attr('min'));
                    maxValue = parseInt($(this).attr('max'));
                    valueCurrent = parseInt($(this).val());

                    var name = $(this).attr('name');
                    if (valueCurrent >= minValue) {
                        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Cart',
                            text: '{{\App\CPU\translate('Sorry, the minimum value was reached')}}'
                        });
                        $(this).val($(this).data('oldValue'));
                    }
                    if (valueCurrent <= maxValue) {
                        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Cart',
                            text: '{{\App\CPU\translate('Sorry, stock limit exceeded')}}.'
                        });
                        $(this).val($(this).data('oldValue'));
                    }


                });
                $(".input-number").keydown(function (e) {
                    // Allow: backspace, delete, tab, escape, enter and .
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                        // Allow: Ctrl+A
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        // Allow: home, end, left, right
                        (e.keyCode >= 35 && e.keyCode <= 39)) {
                        // let it happen, don't do anything
                        return;
                    }
                    // Ensure that it is a number and stop the keypress
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }
                });
            }

            function updateQuantity(key, element) {
                $.post('<?php echo e(route('cart.updateQuantity')); ?>', {
                    _token: '<?php echo e(csrf_token()); ?>',
                    key: key,
                    quantity: element.value
                }, function (data) {
                    updateNavCart();
                    $('#cart-summary').empty().html(data);
                });
            }

            function updateCartQuantity(key) {
                var quantity = $("#cartQuantity" + key).children("option:selected").val();
                $.post('{{route('cart.updateQuantity')}}', {
                    _token: '{{csrf_token()}}',
                    key: key,
                    quantity: quantity
                }, function (response) {
                    if (response.status == 0) {
                        toastr.error(response.message, {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        $("#cartQuantity" + key).val(response['qty']);
                    } else {
                        updateNavCart();
                        $('#cart-summary').empty().html(response);
                    }
                });
            }
            function buy_now() {
                addToCart('add-to-cart-form',true);
                /* location.href = "{{route('checkout-details')}}"; */
            }

        </script>
        <script>
            function couponCode() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: '{{ route('coupon.apply') }}',
                    data: $('#coupon-code-ajax').serializeArray(),
                    success: function (data) {
                        /* console.log(data);
                        return false; */
                        if (data.status == 1) {
                            let ms = data.messages;
                            ms.forEach(
                                function (m, index) {
                                    toastr.success(m, index, {
                                        CloseButton: true,
                                        ProgressBar: true
                                    });
                                }
                            );
                        } else {
                            let ms = data.messages;
                            ms.forEach(
                                function (m, index) {
                                    toastr.error(m, index, {
                                        CloseButton: true,
                                        ProgressBar: true
                                    });
                                }
                            );
                        }
                        setInterval(function () {
                            location.reload();
                        }, 2000);
                    }
                });
            }



        </body>
</html>
            <script>
                import {App} from "../../../../public/js/app";
                export default {
                components: {App}
            }
        </script>
