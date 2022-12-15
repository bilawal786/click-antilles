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
                                                            <label class="" for="billing_first_name">First Name
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="{{$customerDetail->f_name}}" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                                        </p>
                                                        <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                            <label class="" for="billing_last_name">Last Name
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="{{$customerDetail->l_name}}" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                                        </p>
                                                        <div class="clear"></div>
                                                        <p id="billing_company_field" class="form-row form-row-wide">
                                                            <label class="" for="billing_company">Company Name</label>
                                                            <input type="text" value="" placeholder="" id="billing_company" name="billing_company" class="input-text ">
                                                        </p>
                                                        <p id="billing_country_field" class="form-row form-row-wide validate-required validate-email">
                                                            <label class="" for="billing_country">Country
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <select autocomplete="country" class="country_to_state country_select select2-hidden-accessible" id="billing_country" name="billing_country" tabindex="-1" aria-hidden="true">
                                                                <option value="">Select a country…</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>

                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </p>
                                                        <div class="clear"></div>
                                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                            <label class="" for="billing_address_1">Street address
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
                                                        </p>
                                                        <p id="billing_address_2_field" class="form-row form-row-wide address-field">
                                                            <input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text ">
                                                        </p>
                                                        <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                            <label class="" for="billing_city">Town / City
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="" id="billing_city" name="billing_city" class="input-text ">
                                                        </p>
                                                        <p id="billing_state_field" class="form-row form-row-wide validate-required validate-email">
                                                            <label class="" for="billing_state">State / County
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <select data-placeholder="" autocomplete="address-level1" class="state_select select2-hidden-accessible" id="billing_state" name="billing_state" tabindex="-1" aria-hidden="true">
                                                                <option value="">Select an option…</option>
                                                                <option value="AP">Andhra Pradesh</option>
                                                                <option value="AR">Arunachal Pradesh</option>
                                                                <option value="AS">Assam</option>
                                                                <option value="BR">Bihar</option>
                                                                <option value="CT">Chhattisgarh</option>
                                                                <
                                                                <option value="LD">Lakshadeep</option>
                                                                <option value="PY">Pondicherry (Puducherry)</option>
                                                            </select>
                                                        </p>
                                                        <p id="billing_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                            <label class="" for="billing_postcode">Postcode / ZIP
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" value="" placeholder="" id="billing_postcode" name="billing_postcode" class="input-text ">
                                                        </p>
                                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                            <label class="" for="billing_phone">Phone
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="tel" value="{{$customerDetail->phone}}" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                                        </p>
                                                        <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                            <label class="" for="billing_email">Email Address
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="email" value="{{$customerDetail->email}}" placeholder="" id="billing_email" name="billing_email" class="input-text ">
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                            </div>
                                            <!-- .woocommerce-billing-fields -->
                                            <div class="woocommerce-account-fields">
                                                <p class="form-row form-row-wide woocommerce-validated">
                                                    <label class="collapsed woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" data-toggle="collapse" data-target="#createLogin" aria-controls="createLogin">
                                                        <input type="checkbox" value="1" name="createaccount" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                        <span>Create an account?</span>
                                                    </label>
                                                </p>
                                                <div class="create-account collapse" id="createLogin">
                                                    <p data-priority="" id="account_password_field" class="form-row validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                        <label class="" for="account_password">Account password
                                                            <abbr title="required" class="required">*</abbr>
                                                        </label>
                                                        <input type="password" value="" placeholder="Password" id="account_password" name="account_password" class="input-text ">
                                                    </p>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <!-- .woocommerce-account-fields -->
                                        </div>
                                        <!-- .col-1 -->
                                        <div class="col-2">
                                            <div class="woocommerce-shipping-fields">
                                                <h3 id="ship-to-different-address">
                                                    <label class="collapsed woocommerce-form__label woocommerce-form__label-for-checkbox checkbox" data-toggle="collapse" data-target="#shipping-address" aria-controls="shipping-address">
                                                        <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" value="1" name="ship_to_different_address">
                                                        <span>Ship to a different address?</span>
                                                    </label>
                                                </h3>
                                                <div class="shipping_address collapse" id="shipping-address">
                                                    <div class="woocommerce-shipping-fields__field-wrapper">
                                                        <p id="shipping_first_name_field" class="form-row form-row-first validate-required">
                                                            <label class="" for="shipping_first_name">First name
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" autofocus="autofocus" autocomplete="given-name" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="input-text ">
                                                        </p>
                                                        <p id="shipping_last_name_field" class="form-row form-row-last validate-required">
                                                            <label class="" for="shipping_last_name">Last name
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" autocomplete="family-name" value="" placeholder="" id="shipping_last_name" name="shipping_last_name" class="input-text ">
                                                        </p>
                                                        <p id="shipping_company_field" class="form-row form-row-wide">
                                                            <label class="" for="shipping_company">Company name</label>
                                                            <input type="text" autocomplete="organization" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
                                                        </p>
                                                        <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                            <label class="" for="shipping_country">Country
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <select autocomplete="country" class="country_to_state country_select select2-hidden-accessible" id="shipping_country" name="shipping_country" tabindex="-1" aria-hidden="true">
                                                                <option value="">Select a country…</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AF">Afghanistan</option>
                                                            </select>
                                                        </p>
                                                        <p id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                            <label class="" for="shipping_address_1">Street address
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" autocomplete="address-line1" value="" placeholder="House number and street name" id="shipping_address_1" name="shipping_address_1" class="input-text ">
                                                        </p>
                                                        <p id="shipping_address_2_field" class="form-row form-row-wide address-field">
                                                            <input type="text" autocomplete="address-line2" value="" placeholder="Apartment, suite, unit etc. (optional)" id="shipping_address_2" name="shipping_address_2" class="input-text ">
                                                        </p>
                                                        <p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                            <label class="" for="shipping_city">Town / City
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" autocomplete="address-level2" value="" placeholder="" id="shipping_city" name="shipping_city" class="input-text ">
                                                        </p>
                                                        <p id="shipping_state_field" class="form-row form-row-wide address-field validate-state woocommerce-invalid woocommerce-invalid-required-field validate-required" data-o_class="form-row form-row-wide address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field">
                                                            <label class="" for="shipping_state">State / County
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <select data-placeholder="" autocomplete="address-level1" class="state_select select2-hidden-accessible" id="shipping_state" name="shipping_state" tabindex="-1" aria-hidden="true">
                                                                <option value="">Select an option…</option>
                                                                <option value="AP">Andhra Pradesh</option>
                                                                <option value="AR">Arunachal Pradesh</option>

                                                                <option value="DL">Delhi</option>
                                                                <option value="LD">Lakshadeep</option>
                                                                <option value="PY">Pondicherry (Puducherry)</option>
                                                            </select>
                                                        </p>
                                                        <p data-priority="90" id="shipping_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                            <label class="" for="shipping_postcode">Postcode / ZIP
                                                                <abbr title="required" class="required">*</abbr>
                                                            </label>
                                                            <input type="text" autocomplete="postal-code" value="" placeholder="" id="shipping_postcode" name="shipping_postcode" class="input-text ">
                                                        </p>
                                                    </div>
                                                    <!-- .woocommerce-shipping-fields__field-wrapper -->
                                                </div>
                                                <!-- .shipping_address -->
                                            </div>
                                            <!-- .woocommerce-shipping-fields -->
                                            <div class="woocommerce-additional-fields">
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p id="order_comments_field" class="form-row notes">
                                                        <label class="" for="order_comments">Order notes</label>
                                                        <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
                                                    </p>
                                                </div>
                                                <!-- .woocommerce-additional-fields__field-wrapper-->
                                            </div>
                                            <!-- .woocommerce-additional-fields -->
                                        </div>
                                        <!-- .col-2 -->
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
                                                        <strong class="product-quantity">{{$cartItem['quantity']}} ×</strong> {{Str::limit($cartItem['name'],30)}}&nbsp;
                                                    </td>
                                                    <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol"></span> {{\App\CPU\Helpers::currency_converter(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])}}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="product-name">
                                                        Price
                                                    </th>
                                                    <th class="product-total">
                                                        {{\App\CPU\Helpers::currency_converter($shippingPrice)}}
                                                    </th>
                                                </tr>

                                                @php($sub_total+=(($cartItem['price']-$cartItem['discount'])*$cartItem['quantity'])+$shippingPrice)
                                                @php($total_tax+=$cartItem['tax']*$cartItem['quantity'])
                                                @endforeach
                                                @endif

                                                </tbody>
                                                <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td>
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol"></span>{{\App\CPU\Helpers::currency_converter($sub_total) ?? 0}}</span>
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
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                            <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                            <span>I’ve read and accept the <a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">terms &amp; conditions</a></span>
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="hidden" value="1" name="terms-field">
                                                    </p>
                                                    @php($config=\App\CPU\Helpers::get_business_settings('stripe'))

                                                    @if($config['status'])
                                                    <button href="order-received.html"type="button" onclick="setLoading(true)" id="checkout-button" class="button wc-forward text-center">Place order</button>
                                                        <script type="text/javascript">
                                                            // Create an instance of the Stripe object with your publishable API

                                                            var stripe = Stripe('{{$config['published_key']}}');
                                                            var checkoutButton = document.getElementById("checkout-button");
                                                            checkoutButton.addEventListener("click", function () {
                                                                fetch("{{route('pay-stripe')}}", {
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
