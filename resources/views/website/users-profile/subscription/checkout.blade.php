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
                                    <form action="#" class="checkout woocommerce-checkout" method="post" name="checkout">
                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">

                                                <div class="woocommerce-billing-fields">
                                                    <h3>{{\App\CPU\translate('Billing Details')}}</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                <label class="" for="billing_first_name">{{\App\CPU\translate('first_name')}}
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" readonly  value="{{$user->f_name}}" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                                            </p>
                                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                                <label class="" for="billing_last_name">{{\App\CPU\translate('last_name')}}
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" readonly  value="{{$user->l_name}}" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_address_1">{{\App\CPU\translate('email')}}
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" readonly  value="{{$user->email}}" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
                                                            </p>
                                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_address_1">{{\App\CPU\translate('phone')}}
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" readonly  value="{{$user->phone}}" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                </div>

                                            </div>

                                        </div>
                                        <!-- .col2-set -->
                                        <h3 id="order_review_heading">MemberShip Fees</h3>
                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                            <div class="order-review-wrapper">
                                                <h3 class="order_review_heading">{{\App\CPU\translate('subscription4')}}</h3>
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">{{\App\CPU\translate('pro_user')}}</th>
                                                        <th class="product-total">{{\App\CPU\translate('total')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                            <strong class="product-quantity">1 Year ×</strong> {{\App\CPU\Helpers::currency_converter(50)}}&nbsp;
                                                        </td>
                                                        <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol"></span> {{\App\CPU\Helpers::currency_converter(50)}}</span>
                                                        </td>
                                                    </tr>


                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="cart-subtotal">
                                                        <th>{{\App\CPU\translate('Subtotal')}}</th>
                                                        <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter(50) ?? 0}}</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>{{\App\CPU\translate('total')}}</th>
                                                        <td>
                                                            <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter(50) ?? 0}}</span>
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

                                                        </p>
                                                        @php($config=\App\CPU\Helpers::get_business_settings('stripe'))

                                                        @if($config['status'])
                                                            <button href="order-received.html"type="button" onclick="setLoading(true)" id="checkout-button" class="button wc-forward text-center">{{\App\CPU\translate('pai')}}</button>
                                                            <script type="text/javascript">
                                                                // Create an instance of the Stripe object with your publishable API

                                                                var stripe = Stripe('{{$config['published_key']}}');
                                                                var checkoutButton = document.getElementById("checkout-button");
                                                                checkoutButton.addEventListener("click", function () {
                                                                    fetch("{{route('pay-stripee')}}", {
                                                                        method: "GET",
                                                                    }).then(function (response) {
                                                                        console.log(response)
                                                                        return response.text();
                                                                    }).then(function (session) {
                                                                        /*console.log(JSON.parse(session).id)*/
                                                                        return stripe.redirectToCheckout({sessionId: JSON.parse(session).id});
                                                                    }).then(function (result) {
                                                                        if (result.error) {
                                                                            alert(result.error.message);
                                                                        }
                                                                    }).catch(function (error) {
                                                                        console.error("{{\App\CPU\translate('Error')}}:", error);
                                                                    });
                                                                });
                                                            </script>
                                                        @endif
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
