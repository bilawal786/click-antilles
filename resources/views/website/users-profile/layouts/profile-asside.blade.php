<style>
    body {
        font-family: sans-serif;
    }

    .footer span {
        font-size: 12px;
        font-style: italic;
    }

    .product-qty span {
        font-size: 12px;
        color: #6A6A6A;
    }

    label {
        font-size: 16px;
    }

    .divider-role {
        border-bottom: 1px solid whitesmoke;
    }

    .sidebarL h3:hover + .divider-role {
        border-bottom: 3px solid {{$web_config['secondary_color']}}    !important;
        transition: .2s ease-in-out;
    }

    .price_sidebar {
        padding: 20px;
    }

    @media (max-width: 600px) {

        .sidebar_heading h1 {
            text-align: center;
            color: aliceblue;
            padding-bottom: 17px;
            font-size: 19px;
        }

        .sidebarR {
            padding: 24px;
        }

        .price_sidebar {
            padding: 20px;
        }
    }
    .active{
        background-color: #0063d1!important;
        color: white!important;
    }
    .active1{
        background-color: rgba(0,0,0,.03);
    }

</style>

<div class="sidebarR col-lg-3 col-md-3">
    <!--Price Sidebar-->
    <div class="price_sidebar rounded-lg box-shadow-sm" id="shop-sidebar" style=" margin-bottom: -10px;background: white; height: 615px;border: 2px solid #0063d1; border-radius: 6px;padding: 3px!important;">
        <div class="box-shadow-sm">

        </div>
        <div class="pb-0 {{Request::is('account-oder*') || Request::is('account-order-detailss*') ? 'active' :'active1'}}" style="padding:10px 0px 0px 10px!important;">
            <!-- Filter by price-->
            <div class="sidebarL">
                <h3 class="widget-title btnF" style="font-weight: 700;">

                    <a class="{{Request::is('account-oder*') || Request::is('account-order-details*') ? 'active' :''}}"  href="{{route('account-oder') }} ">{{\App\CPU\translate('my_order')}}</a>
                </h3>
                <div class="divider-role"
                     style="border: 1px solid whitesmoke; margin-bottom: 14px;  margin-top: -6px;">
                </div>
            </div>
        </div>
        <div class="pb-0 {{Request::is('wishlistss*') ? 'active' :'active1'}}"  style="padding:10px 0px 0px 10px!important; ">
            <!-- Filter by price-->
            <div class="sidebarL">
                <h3 class="widget-title btnF " style="font-weight: 700;">
                    <a class="{{Request::is('wishlistss*') ? 'active' :''}}"   href="{{route('track-order.create')}}"> {{\App\CPU\translate('track_order')}}  </a></h3>
                <div class="divider-role"
                     style="border: 1px solid whitesmoke; margin-bottom: 14px;  margin-top: -6px;">
                </div>
            </div>
        </div>
        <div class="pb-0 {{Request::is('wishlistss*') ? 'active' :'active1'}}"  style="padding:10px 0px 0px 10px!important; ">
            <!-- Filter by price-->
            <div class="sidebarL">
                <h3 class="widget-title btnF " style="font-weight: 700;">
                    <a class="{{Request::is('wishlistss*') ? 'active' :''}}"   href="{{route('wishlistss')}}"> {{\App\CPU\translate('wish_list')}}  </a></h3>
                <div class="divider-role"
                     style="border: 1px solid whitesmoke; margin-bottom: 14px;  margin-top: -6px;">
                </div>
            </div>
        </div>

        <div class="pb-0  {{Request::is('user-accountt*') ? 'active' :'active1'}}"  style="padding:10px 0px 0px 10px!important;">
            <!-- Filter by price-->
            <div class=" sidebarL">
                <h3 class="widget-title btnF" style="font-weight: 700;">
                    <a class="{{Request::is('user-accountt*')?'active':''}}" href="{{route('user-accountt')}}">
                        {{\App\CPU\translate('profile_info')}}
                    </a>
                </h3>
                <div class="divider-role"
                     style="border: 1px solid whitesmoke; margin-bottom: 14px;  margin-top: -6px;">
                </div>
            </div>
        </div>

    </div>
</div>


















