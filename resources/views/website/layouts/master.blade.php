<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <style>

        .site-header .site-branding {
            margin-bottom: 1.533em;
            margin-top: -10px;
        }

        @media (min-width: 1200px)
            .page-template-template-homepage-v1 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v1 .header-v6 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v2 .header-v6 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v1 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v4 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v3 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v5 .header-v6 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v5 .departments-menu > .dropdown-menu, .page-template-template-homepage-v6 .header-v6 .departments-menu > .dropdown-menu {
                display: none !important;
            }
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

@if(request()->is('product/single/*') )
    <body class="woocommerce-active single-product full-width normal">
    @else
        <body class="woocommerce-active page-template-template-homepage-v1 can-uppercase">
        @endif
        <div class="hfeed site" id="page">
            <div class="top-bar top-bar-v1">
                <div class="col-full">
                    <ul id="menu-top-bar-left" class="nav justify-content-center">
                        <li class="menu-item animate-dropdown">
                            <a title="TechMarket eCommerce - Always free delivery" href="#">Termes et conditions</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Quality Guarantee of products" href="#">Garantie de qualité des produits</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="Fast returnings program" href="#">Programme de retours rapides</a>
                        </li>
                        <li class="menu-item animate-dropdown">
                            <a title="No additional fees" href="#">Politique de confidentialité</a>
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
                                <a href="" class="custom-logo-link" rel="home">
                                    <img src="{{asset('public/web/assets/logo click antilles.png')}}">
                                </a>
                                <!-- /.custom-logo-link -->
                            </div>
                            <!-- /.site-branding -->
                            <!-- ============================================================= End Header Logo ============================================================= -->
                            <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation"
                                 data-nav="flex-menu">
                                <ul id="menu-primary-menu" class="nav yamm">
                                    <li class="sale-clr yamm-fw menu-item animate-dropdown">
                                        <a title="Super deals" href="{{route('home')}}">Accuil</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Mother`s Day" data-toggle="dropdown" aria-haspopup="true" href="#">À
                                            propos de </a>

                                    </li>
                                    <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Pages" data-toggle="dropdown" aria-haspopup="true" href="#">Nous
                                            contacter </a>

                                    </li>
                                    @auth
                                        <li class="menu-item menu-item-has-children animate-dropdown dropdown show">
                                            <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle"
                                               aria-haspopup="true" href="#" aria-expanded="true">Mon compte <span
                                                    class="caret"></span></a>
                                            <ul role="menu" class="dropdown-menu show" x-placement="bottom-start"
                                                style="position: absolute; transform: translate3d(24px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <li class="menu-item animate-dropdown">
                                                    <a title="Wishlist" href="#">Profil</a>
                                                </li>
                                                <li class="menu-item animate-dropdown">
                                                    <a href="{{route('logout')}}" title="Headphones Sale"
                                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                        Déconnecter
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                          style="display: none;">
                                                        @csrf
                                                    </form>

                                                </li>

                                            </ul>
                                            <!-- .dropdown-menu -->
                                        </li>
                                    @else
                                        <li class="menu-item animate-dropdown">
                                            <a href="#">Connexion</a>
                                        </li>
                                    @endauth

                                </ul>
                                <!-- .nav -->
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
                                    <span>Tous les Catégorie</span>
                                </button>

                                <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">

                                    @foreach($category as $cat)
                                        <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                            <a title="{{$cat->name}}" data-toggle="dropdown" class="dropdown-toggle"
                                               aria-haspopup="true" href="#">{{$cat->name}} <span class="caret"></span></a>
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
                                                                                    <li class="nav-title">{{$sub->name}}</li>
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

                        <form class="navbar-search" method="get" action="#">
                            <label class="sr-only screen-reader-text" for="search">Rechercher:</label>
                            <div class="input-group">
                                <input type="text" id="search" class="form-control search-field product-search-field"
                                       dir="ltr" value="" name="s" placeholder="Search for products"/>
                                <div class="input-group-addon search-categories popover-header">
                                    <select name='product_cat' id='product_cat' class='postform resizeselect'>
                                        <option value='' selected='selected'>Toutes catégories</option>
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
                                        <span class="search-btn">Chercher</span>
                                    </button>
                                </div>
                                <!-- .input-group-btn -->
                            </div>
                            <!-- .input-group -->
                        </form>

                        <ul class="header-wishlist nav navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="tm tm-favorites"></i>
                                    <span id="top-cart-wishlist-count" class="value">3</span>
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
                                                    <a href="" class="button wc-forward">Voir le panier</a>
                                                    <a href="" class="button checkout wc-forward">Vérifier</a>
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
                                <a href="#" class="custom-logo-link" rel="home">
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
                                        <span class="tmhm-close">Close</span>
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
                                            <label class="screen-reader-text" for="woocommerce-product-search-field-0">Rechercher:</label>
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
                                                <h5 class="newsletter-title">Inscrivez-vous à la newsletter</h5>
                                                <span class="newsletter-marketing-text">...et recevoir
                                                    <strong>20 EURO Coupon pour premier achat</strong>
                                                </span>
                                            </div>
                                            <!-- .newsletter-header -->
                                            <div class="newsletter-body">
                                                <form class="newsletter-form">
                                                    <input type="text" placeholder="Enter your email address">
                                                    <button class="button" type="button">Inscrire</button>
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

                    <!-- .footer-widgets-block -->
                    <div class="site-info">
                        <div class="col-full">
                            <div class="copyright">Copyright &copy; 2022 <a href="#">Click Antilles</a> Theme. All
                                rights reserved.
                            </div>
                            <!-- .copyright -->
                            <div class="credit">Fabriqué avec
                                <i class="fa fa-heart"></i> by Click Antilles.
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
                   alert(key);
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

        </body>
</html>
