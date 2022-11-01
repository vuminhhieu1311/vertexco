@extends('layouts.customer')

@section('content')
    <section id="checkout-content">
        <div class="container">
            <div class="row">
                <form id="checkout-form" method="POST" action="{{ route('orders.store') }}">
                    @csrf
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left-checkout">
                        <div class="sec-title style-three">
                            <h2>{{ __('messages.billing_address') }}</h2>
                            <div class="line"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>{{ __('messages.name') }} <span style="color:red">*</span></label>
                                <input name="name" type="text" value="{{ auth()->user()->name }}"
                                    placeholder="{{ __('messages.name') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>{{ __('messages.address') }} <span style="color:red">*</span></label>
                                <input name="address" type="text" value="{{ auth()->user()->address }}"
                                    placeholder="{{ __('messages.address') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Email <span style="color:red">*</span></label>
                                <input name="email" type="text" value="{{ auth()->user()->email }}"
                                    placeholder="Email">
                            </div>
                            <div class="col-lg-6">
                                <label>{{ __('messages.phone_number') }} <span style="color:red">*</span></label>
                                <input name="phone_number" type="text" value="{{ auth()->user()->phone_number }}"
                                    placeholder="{{ __('messages.phone_number') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>{{ __('messages.note') }}</label>
                                <textarea name="note" placeholder="{{ __('messages.note') }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="sec-title style-three">
                            <h2>{{ __('messages.your_order') }}</h2>
                            <div class="line"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 order-box">
                                <ul>
                                    @foreach (Cart::content() as $id => $item)
                                        <li>
                                            {{ $item->name }} X {{ $item->qty }}
                                            <span>@money($item->price * $item->qty, 'VND')</span>
                                        </li>
                                    @endforeach
                                    <li>{{ __('messages.subtotal') }}<span class="bold">@money(Cart::subtotal(), 'VND')</span></li>
                                    <li>{{ __('messages.tax') }}<span class="bold">@money(Cart::tax(), 'VND')</span></li>
                                    <li class="total">{{ __('messages.total') }}<span
                                            class="bold">@money(Cart::total(), 'VND')</span></li>
                                    <li>
                                        <a href="#" type="submit" id="order-btn" class="place-order">
                                            {{ __('messages.place_order') }}
                                            </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $('#order-btn').on('click', (e) => {
            e.preventDefault();
            $('#checkout-form').submit();
        });
    </script>
@endsection
