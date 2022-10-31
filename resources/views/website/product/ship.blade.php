@extends('website.layouts.master')
@section('content')
    {{--stripe--}}
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">ACCUIL</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    Checkout
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">


                                    <!-- .collapse -->
                                    <form action="#" class="checkout woocommerce-checkout" method="post"
                                          name="checkout">
                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">

                                                <div class="woocommerce-billing-fields">

                                                    <div class="tab-content">
                                                        <div id="grid" class="tab-pane active" role="tabpanel">
                                                            <div class="woocommerce columns-5">
                                                                <section class="section-product-categories">
                                                                    <header class="section-header">
                                                                        <h1 class="woocommerce-products-header__title page-title">
                                                                            SHIPMENT Products &amp;CMA-CGM</h1>
                                                                    </header>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="woocommerce columns-5">
                                                                                <div class="product-loop-categories">
                                                                                    <div class="order-review-wrapper">
                                                                                        <a href="#">
                                                                                            <h3 class="order_review_heading"
                                                                                                style="text-align: center;">
                                                                                                1X40GP</h3>
                                                                                            <table
                                                                                                class="shop_table woocommerce-checkout-review-order-table">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th class="product-name">
                                                                                                        Product
                                                                                                    </th>
                                                                                                    <th class="product-total">
                                                                                                        Total
                                                                                                    </th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                @php($sub_total=0)
                                                                                                @php($total_tax=0)
                                                                                                @if($carts->count() > 0)
                                                                                                    @foreach($carts as  $cartItem)
                                                                                                        <tr class="cart_item">
                                                                                                            <td class="product-name">
                                                                                                                <strong
                                                                                                                    class="product-quantity">{{$cartItem['quantity']}}
                                                                                                                    ×</strong> {{Str::limit($cartItem['name'],30)}}
                                                                                                                &nbsp;
                                                                                                            </td>
                                                                                                            <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span> {{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        @php($sub_total+=($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
                                                                                                        @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
                                                                                                    @endforeach
                                                                                                @endif

                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                <tr class="cart-subtotal">
                                                                                                    <th>Subtotal</th>
                                                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="order-total">
                                                                                                    <th>Total</th>
                                                                                                    <td>
                                                                                                        <strong>
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                        </strong>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                            <button style="width: 100%"
                                                                                                    href="order-received.html"
                                                                                                    type="button"
                                                                                                    id="checkout-button"
                                                                                                    class="button wc-forward text-center">
                                                                                                Chose
                                                                                            </button>

                                                                                        </a>
                                                                                    </div>


                                                                                </div>
                                                                                <!-- .product-loop-categories -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="woocommerce columns-5">
                                                                                <div class="product-loop-categories">
                                                                                    <div class="order-review-wrapper">
                                                                                        <a href="#">
                                                                                            <h3 class="order_review_heading"
                                                                                                style="text-align: center;">
                                                                                                1X40GP</h3>
                                                                                            <table
                                                                                                class="shop_table woocommerce-checkout-review-order-table">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th class="product-name">
                                                                                                        Product
                                                                                                    </th>
                                                                                                    <th class="product-total">
                                                                                                        Total
                                                                                                    </th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                @php($sub_total=0)
                                                                                                @php($total_tax=0)
                                                                                                @if($carts->count() > 0)
                                                                                                    @foreach($carts as  $cartItem)
                                                                                                        <tr class="cart_item">
                                                                                                            <td class="product-name">
                                                                                                                <strong
                                                                                                                    class="product-quantity">{{$cartItem['quantity']}}
                                                                                                                    ×</strong> {{Str::limit($cartItem['name'],30)}}
                                                                                                                &nbsp;
                                                                                                            </td>
                                                                                                            <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span> {{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        @php($sub_total+=($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
                                                                                                        @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
                                                                                                    @endforeach
                                                                                                @endif

                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                <tr class="cart-subtotal">
                                                                                                    <th>Subtotal</th>
                                                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="order-total">
                                                                                                    <th>Total</th>
                                                                                                    <td>
                                                                                                        <strong>
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                        </strong>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                            <button style="width: 100%"
                                                                                                    href="order-received.html"
                                                                                                    type="button"
                                                                                                    id="checkout-button"
                                                                                                    class="button wc-forward text-center">
                                                                                                Chose
                                                                                            </button>

                                                                                        </a>
                                                                                    </div>


                                                                                </div>
                                                                                <!-- .product-loop-categories -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="woocommerce columns-5">
                                                                                <div class="product-loop-categories">
                                                                                    <div class="order-review-wrapper">
                                                                                        <a href="#">
                                                                                            <h3 class="order_review_heading"
                                                                                                style="text-align: center;">
                                                                                                1X40GP</h3>
                                                                                            <table
                                                                                                class="shop_table woocommerce-checkout-review-order-table">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th class="product-name">
                                                                                                        Product
                                                                                                    </th>
                                                                                                    <th class="product-total">
                                                                                                        Total
                                                                                                    </th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                @php($sub_total=0)
                                                                                                @php($total_tax=0)
                                                                                                @if($carts->count() > 0)
                                                                                                    @foreach($carts as  $cartItem)
                                                                                                        <tr class="cart_item">
                                                                                                            <td class="product-name">
                                                                                                                <strong
                                                                                                                    class="product-quantity">{{$cartItem['quantity']}}
                                                                                                                    ×</strong> {{Str::limit($cartItem['name'],30)}}
                                                                                                                &nbsp;
                                                                                                            </td>
                                                                                                            <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span> {{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        @php($sub_total+=($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
                                                                                                        @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
                                                                                                    @endforeach
                                                                                                @endif

                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                <tr class="cart-subtotal">
                                                                                                    <th>Subtotal</th>
                                                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="order-total">
                                                                                                    <th>Total</th>
                                                                                                    <td>
                                                                                                        <strong>
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                        </strong>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                            <button style="width: 100%"
                                                                                                    href="order-received.html"
                                                                                                    type="button"
                                                                                                    id="checkout-button"
                                                                                                    class="button wc-forward text-center">
                                                                                                Chose
                                                                                            </button>

                                                                                        </a>
                                                                                    </div>


                                                                                </div>
                                                                                <!-- .product-loop-categories -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="woocommerce columns-5">
                                                                                <div class="product-loop-categories">
                                                                                    <div class="order-review-wrapper">
                                                                                        <a href="#">
                                                                                            <h3 class="order_review_heading"
                                                                                                style="text-align: center;">
                                                                                                1X40GP</h3>
                                                                                            <table
                                                                                                class="shop_table woocommerce-checkout-review-order-table">
                                                                                                <thead>
                                                                                                <tr>
                                                                                                    <th class="product-name">
                                                                                                        Product
                                                                                                    </th>
                                                                                                    <th class="product-total">
                                                                                                        Total
                                                                                                    </th>
                                                                                                </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                @php($sub_total=0)
                                                                                                @php($total_tax=0)
                                                                                                @if($carts->count() > 0)
                                                                                                    @foreach($carts as  $cartItem)
                                                                                                        <tr class="cart_item">
                                                                                                            <td class="product-name">
                                                                                                                <strong
                                                                                                                    class="product-quantity">{{$cartItem['quantity']}}
                                                                                                                    ×</strong> {{Str::limit($cartItem['name'],30)}}
                                                                                                                &nbsp;
                                                                                                            </td>
                                                                                                            <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span> {{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        @php($sub_total+=($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
                                                                                                        @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
                                                                                                    @endforeach
                                                                                                @endif

                                                                                                </tbody>
                                                                                                <tfoot>
                                                                                                <tr class="cart-subtotal">
                                                                                                    <th>Subtotal</th>
                                                                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="order-total">
                                                                                                    <th>Total</th>
                                                                                                    <td>
                                                                                                        <strong>
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                                                                        </strong>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tfoot>
                                                                                            </table>
                                                                                            <button style="width: 100%"
                                                                                                    href="order-received.html"
                                                                                                    type="button"
                                                                                                    id="checkout-button"
                                                                                                    class="button wc-forward text-center">
                                                                                                Chose
                                                                                            </button>

                                                                                        </a>
                                                                                    </div>


                                                                                </div>
                                                                                <!-- .product-loop-categories -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- .woocommerce -->
                                                                </section>
                                                            </div>

                                                            <!-- .woocommerce -->
                                                        </div>

                                                    </div>
                                                    <!-- .tab-content -->

                                                </div>

                                            </div>

                                        </div>
                                        <!-- .col2-set -->
                                        <h3 id="order_review_heading">Your order</h3>
                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                            <div class="order-review-wrapper">
                                                <h3 class="order_review_heading">Your Order</h3>
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">Product</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php($sub_total=0)
                                                    @php($total_tax=0)
                                                    @if($carts->count() > 0)
                                                        @foreach($carts as  $cartItem)
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    <strong
                                                                        class="product-quantity">{{$cartItem['quantity']}}
                                                                        ×</strong> {{Str::limit($cartItem['name'],30)}}
                                                                    &nbsp;
                                                                </td>
                                                                <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span> {{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
                                                                </td>
                                                            </tr>
                                                            @php($sub_total+=($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])
                                                            @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
                                                        @endforeach
                                                    @endif

                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td>
                                                            <strong>
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                <!-- /.woocommerce-checkout-review-order-table -->
                                                <div class="woocommerce-checkout-payment" id="payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                    </ul>
                                                    <div class="form-row place-order">
                                                        <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                            <label
                                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                <input type="checkbox" id="terms" name="terms"
                                                                       class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                                <span>I’ve read and accept the <a
                                                                        class="woocommerce-terms-and-conditions-link"
                                                                        href="terms-and-conditions.html">terms &amp; conditions</a></span>
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" value="1" name="terms-field">
                                                        </p>
                                                        @php($config=\App\CPU\Helpers::get_business_settings('stripe'))

                                                        <a href="{{route('product-checkout')}}" id="checkout-button" class="button wc-forward text-center">SHIPMENT CMA-CGM
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- /.woocommerce-checkout-payment -->
                                            </div>
                                            <!-- /.order-review-wrapper -->
                                        </div>
                                        <!-- .woocommerce-checkout-review-order -->
                                    </form>
                                    <!-- .woocommerce-checkout -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- #post-## -->
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
<script>
    function setLoading(isLoading) {
        if (isLoading) {
            document.querySelector("#checkout-button").disabled = true;
        }
    }
</script>
