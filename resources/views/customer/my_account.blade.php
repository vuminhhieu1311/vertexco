@extends('layouts.customer')

@section('content')
    <section id="checkout-content">
        <div class="container">
            <div class="row">
                <form id="checkout-form" method="POST" action="{{ route('user-profile-information.update') }}">
                    @csrf
                    @method('PUT')
                    <div class="left-checkout" style="width: 600px;margin-left: auto;margin-right: auto;">
                        <div class="sec-title style-three">
                            <h2>Thông tin tài khoản</h2>
                            <div class="line"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>{{ __('messages.name') }} <span style="color:red">*</span></label>
                                <input name="name" type="text" value="{{ auth()->user()->name }}"
                                    placeholder="{{ __('messages.name') }}">
                                @error('name')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>{{ __('messages.address') }} <span style="color:red">*</span></label>
                                <input name="address" type="text" value="{{ auth()->user()->address }}"
                                    placeholder="{{ __('messages.address') }}">
                                @error('address')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Email <span style="color:red">*</span></label>
                                <input name="email" type="text" value="{{ auth()->user()->email }}"
                                    placeholder="Email">
                                @error('email')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>{{ __('messages.phone_number') }} <span style="color:red">*</span></label>
                                <input name="phone_number" type="text" value="{{ auth()->user()->phone_number }}"
                                    placeholder="{{ __('messages.phone_number') }}">
                                @error('phone_number')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="theme-btn btn-theme-one rounded-btn" style="padding:6px 20px;">
                            {{ __('messages.save_changes') }}
                        </button>
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
