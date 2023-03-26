@extends('layouts.customer')

@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="product-area">
                        <div class="content-tab-product-category">
                            <!-- cart are start-->
                            <div class="cart-page-area">
                                <form method="post" action="#">
                                    <div class="table-responsive">
                                        <table class="shop-cart-table">
                                            <thead>
                                                <tr>
                                                    <th class="product-thumbnail">{{ __('messages.product_image') }}</th>
                                                    <th class="product-name">{{ __('messages.product_name') }}</th>
                                                    <th class="product-price">{{ __('messages.price') }}</th>
                                                    <th class="product-quantity">{{ __('messages.quantity') }}</th>
                                                    <th class="product-subtotal ">{{ __('messages.total2') }}</th>
                                                    <th class="product-remove">&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart as $id => $item)
                                                    {{-- <tr>
                                                        <td class="preview">
                                                            <img src="{{ asset($item->options->avatar_url) }}"
                                                                style="width:200px;height:200px;">
                                                        </td>
                                                        <td class="product">{{ $item->name }}</td>
                                                        <td class="price">@money($item->price, 'VND')</td>
                                                        <td class="quantity">
                                                            <input id="quantity-input" type="number" class="form-control"
                                                                placeholder="{{ __('messages.quantity') }}" value="{{ $item->qty }}" required
                                                                min="1" max="{{ $item->product_quantity }}" data-url="{{ route('cart.update', ['id' => $id]) }}">
                                                        </td>
                                                        <td class="total">@money($item->price * $item->qty, 'VND')</td>
                                                        <td class="del-item">
                                                            <a href="{{ route('cart.remove', ['id' => $id]) }}">
                                                                <i class="fa fa-close"></i>
                                                            </a>
                                                        </td>
                                                    </tr> --}}
                                                    <tr class="cart_item">
                                                        <td class="item-img">
                                                            <a href="#"><img
                                                                    src="{{ asset($item->options->avatar_url) }}"></a>
                                                        </td>
                                                        <td class="item-title">
                                                            <div style="text-align:left;padding-left:30px;">
                                                                <div style="font-weight:600;font-size:14px;">{{ $item->name }}</div>
                                                                <div style="font-style:italic;font-size:12px;">{{ $item->options->color }}, {{ $item->options->size }}</div>
                                                            </div>
                                                        </td>
                                                        <td class="item-price">@money($item->price, 'VND')</td>
                                                        <td class="item-qty">
                                                            <div class="cart-quantity">
                                                                <div class="product-qty">
                                                                    <div class="cart-quantity">
                                                                        <div class="cart-plus-minus">
                                                                            <div class="dec qtybutton">-</div>
                                                                            <input value="{{ $item->qty }}"
                                                                                name="qtybutton" class="cart-plus-minus-box"
                                                                                type="text">
                                                                            <div class="inc qtybutton">+</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="total-price"><strong>@money($item->price * $item->qty, 'VND')</strong></td>
                                                        <td class="remove-item">
                                                            <a href="#"><i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart-bottom-area" style="margin-bottom:30px;">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-7 col-xs-12">
                                                <div class="update-coupne-area">
                                                    <div class="coupn-area">
                                                        <div class="discount">
                                                            <h3>Discount Codes</h3>
                                                            <label for="coupon_code">Enter your coupon code if you
                                                                have one.</label>
                                                            <input type="hidden" value="0" id="remove-coupone"
                                                                name="remove">
                                                            <input type="text" value="" name="coupon_code"
                                                                id="coupon_code" class="input-text fullwidth">
                                                            <button value="Apply Coupon"
                                                                onclick="discountForm.submit(false)" class="button coupon "
                                                                title="Apply Coupon" type="button"><span>Apply
                                                                    Coupon</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-5 col-xs-12">
                                                <div class="cart-total-area">
                                                    <div class="catagory-title cat-tit-5 text-right">
                                                        <h3>Cart Totals</h3>
                                                    </div>
                                                    <div class="sub-shipping">
                                                        <p>Subtotal <span>$575.00</span></p>
                                                        <p>Shipping <span>$75.00</span></p>
                                                    </div>
                                                    <div class="shipping-method text-right">
                                                        <div class="shipp">
                                                            <input type="radio" name="ship" id="pay-toggle1">
                                                            <label for="pay-toggle1">Flat Rate</label>
                                                        </div>
                                                        <div class="shipp">
                                                            <input type="radio" name="ship" id="pay-toggle3">
                                                            <label for="pay-toggle3">Direct Bank Transfer</label>
                                                        </div>
                                                        <p><a href="#">Calculate Shipping</a></p>
                                                    </div>
                                                    <div class="process-cart-total">
                                                        <p>Total <span>$500.00</span></p>
                                                    </div>
                                                    <div class="process-checkout-btn text-right">
                                                        <button class="button btn-proceed-checkout"
                                                            title="Proceed to Checkout" type="button"><span>Proceed to
                                                                Checkout</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- cart are end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('resources/js/customer/cart.js') }}"></script>
@endsection
