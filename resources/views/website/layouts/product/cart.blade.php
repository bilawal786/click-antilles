<li class="animate-dropdown dropdown ">
    <a class="cart-contents" href="#" data-toggle="dropdown"
       title="View your shopping cart">
        <i class="tm tm-shopping-bag"></i>
        @php($cart=\App\CPU\CartManager::get_cart())

        <span class="count"> {{$cart->count()}}</span>
        <span class="amount">
        <span class="price-label">{{\App\CPU\translate('basket')}}</span> {{\App\CPU\Helpers::currency_converter(\App\CPU\CartManager::cart_total_applied_discount(\App\CPU\CartManager::get_cart()))}}</span>
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
                        <a href="" class="button wc-forward">{{\App\CPU\translate('basket')}}</a>
                        <a href="" class="button checkout wc-forward">{{\App\CPU\translate('check')}}</a>
                    </p>
                </div>
                <!-- .widget_shopping_cart_content -->
            </div>
            <!-- .widget_shopping_cart -->
        </li>
    </ul>
    <!-- .dropdown-menu-mini-cart -->
</li>
