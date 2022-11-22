@extends('layouts.customer')

@section('css')
    <link href="{{ asset('vendor/toastr/toastr.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!--Sidebar Section-->
    <div class="sidebar-section no-bg" id="sidebar-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="col-md-9 col-sm-8 col-xs-12 content-side pull-right">
                    <!--Services Section-->
                    <!-- .shop-page-content -->
                    <div class="shop-page-content">
                        <div class="sec-title style-three">
                            <h2>{{ __('messages.featured_products') }}</h2>
                        </div>
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-4 single-shop-item">
                                    <a href="{{ route('products.detail', ['product' => $product->id]) }}">
                                        <img style="height: 250px;" src="{{ asset(Storage::url($product->avatar_url)) }}">
                                    </a>
                                    <div class="meta">
                                        <h4>
                                            <a href="{{ route('products.detail', ['product' => $product->id]) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h4>
                                        <span style="display:flex;justify-content:center;align-items:center">
                                            {{ __('messages.price') }}:&nbsp;
                                            @if ($product->price != $product->final_price)
                                                <span style="text-decoration:line-through;">@money($product->price, 'VND')</span>&nbsp;
                                            @endif
                                            <b>@money($product->final_price, 'VND')</b>
                                        </span>
                                        <a data-url="{{ route('cart.store', ['product' => $product->id]) }}"
                                            class="add-to-cart hvr-bounce-to-right">{{ __('messages.add_to_cart') }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- /.shop-page-content -->
                </div>

                <!--Sidebar-->
                <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
                    <aside class="sidebar">
                        <!-- Search Form -->
                        <div class="widget search-form">
                            <h3>{{ __('messages.search_product') }}</h3>
                            <div class="form-group">
                                <input id="search-input" type="search" name="name" value="{{ request()->get('name') }}"
                                    placeholder="{{ __('messages.search_product') }}">
                                <button id="search-btn"><span class="fa fa-search"></span></button>
                            </div>
                        </div>
                        <div class="widget popular-tags">
                            <h3>{{ __('messages.categories') }}</h3>
                            <div class="tags">
                                @foreach ($categories as $category)
                                    <a class="category-filter" data-id="{{ $category->id }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <a href="/" class="theme-btn btn-theme-grey rounded-btn" style="padding:5px 20px">
                            {{ __('messages.clear_filter') }}
                        </a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ Vite::asset('resources/js/customer/home.js') }}"></script>
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
@endsection
