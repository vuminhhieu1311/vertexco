@extends('layouts.customer')

@section('content')
    <section class="cart-page p-60" id="sidebar-section" style="min-height:400px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th class="preview">{{ __('messages.product_image') }}</th>
                                <th class="product">{{ __('messages.product_name') }}</th>
                                <th class="price">{{ __('messages.price') }}</th>
                                <th class="quantity">{{ __('messages.quantity') }}</th>
                                <th class="total">{{ __('messages.total2') }}</th>
                                <th class="del-item">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $id => $item)
                                <tr>
                                    <td class="preview">
                                        <img src="{{ asset(Storage::url($item->options->avatar_url)) }}"
                                            style="width:200px;height:200px;">
                                    </td>
                                    <td class="product">{{ $item->name }}</td>
                                    <td class="price">@money($item->price, 'VND')</td>
                                    <td class="quantity">
                                        <input id="quantity-input" type="number" class="form-control"
                                            placeholder="{{ __('messages.quantity') }}" value="{{ $item->qty }}" required
                                            min="1" data-url="{{ route('cart.update', ['id' => $id]) }}">
                                    </td>
                                    <td class="total">@money($item->price * $item->qty, 'VND')</td>
                                    <td class="del-item">
                                        <a href="{{ route('cart.remove', ['id' => $id]) }}">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="cart-total-box row mt-40">
                <div class="col-lg-5 col-sm-6 col-xs-12 pull-right">
                    <div class="proceed-to-checkout" style="display:flex;align-items:center">
                        <span class="mr-20" style="font-size: 20px;font-weight:600;">{{ __('messages.subtotal') }}:
                            <span>@money(Cart::priceTotal(), 'VND')</span></span>
                        @if (Cart::count())
                            <a href="{{ route('checkout') }}"
                                class="hvr-bounce-to-right">{{ __('messages.checkout') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ Vite::asset('resources/js/customer/cart.js') }}"></script>
@endsection
