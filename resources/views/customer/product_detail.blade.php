@extends('layouts.customer')

@section('css')
    <style>
        .star-rating {
            display: flex;
            align-items: center;
            font-size: 1.25em;
        }

        .back-stars {
            display: flex;
            color: #ccc;
            position: relative;
        }

        .front-stars {
            display: flex;
            color: #FFBC0B;
            overflow: hidden;
            position: absolute;
            top: 0;
            transition: all .5s
        }
    </style>
@endsection

@section('content')
    <div class="page-wrapper">
        <!--Sidebar Section-->
        <div class="sidebar-section no-bg" id="sidebar-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side pull-right">
                        <!--Services Section-->
                        <!-- .product-details-page-content -->
                        <div class="product-details-page-content">
                            <div class="row product-details-box">
                                <!-- Carousel container -->
                                <div id="my-pics" class="col-lg-6 carousel slide" data-ride="carousel"
                                    style="width:400px;margin:auto;margin-right:20px">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#my-pics" data-slide-to="0" class="active"></li>
                                        @foreach ($product->images as $image)
                                            <li data-target="#my-pics" data-slide-to="{{ $loop->index + 1 }}"></li>
                                        @endforeach
                                    </ol>
                                    <!-- Content -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img style="height:500px;width:500px;"
                                                src="{{ asset(Storage::url($product->avatar_url)) }}">
                                        </div>
                                        @foreach ($product->images as $image)
                                            <div class="item">
                                                <img style="height:500px;width:500px;"
                                                    src="{{ asset(Storage::url($image->url)) }}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Previous/Next controls -->
                                    <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="col-lg-6">
                                    <h3>{{ $product->name }}</h3>
                                    {!! $product->description !!}
                                    <span style="display:flex;">
                                        <span>{{ __('messages.price') }}:</span>&nbsp;&nbsp;
                                        @if ($product->price != $product->final_price)
                                            <span style="text-decoration:line-through;">@money($product->price, 'VND')</span>
                                        @endif
                                        <b>@money($product->final_price, 'VND')</b>
                                    </span>
                                    <form id="cart-form" method="POST"
                                        action="{{ route('cart.save', ['product' => $product->id]) }}">
                                        @csrf
                                        <span>{{ __('messages.quantity') }} :
                                            <input type="text" name="quantity" value="1">
                                        </span>
                                        <a id="cart-btn" class="add-to-cart hvr-bounce-to-right">
                                            {{ __('messages.add_to_cart') }}
                                        </a>
                                    </form>
                                </div>
                            </div>
                            <div class="product-details-tab-title row">
                                <div class="col-lg-12">
                                    <ul>
                                        <li data-tab-name="description" class="active">
                                            <span>{{ __('messages.description') }}</span>
                                        </li>
                                        <li data-tab-name="specification"><span>{{ __('messages.instruction') }}</span></li>
                                        <li data-tab-name="review"><span>{{ __('messages.review') }}
                                                ({{ $product->ratings->count() }})</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details-tab-content row">
                                <div class="col-lg-12" id="description">
                                    {!! $product->description !!}
                                </div>
                                <div class="col-lg-12" id="specification">
                                    {!! $product->instruction !!}
                                </div>
                                <div class="col-lg-12" id="review" style="padding-bottom:15px;">
                                    @foreach ($product->ratings as $rating)
                                        <div style="display:flex;margin-bottom:20px;">
                                            <img src="{{ Avatar::create($rating->user->name)->setFontSize(30)->toBase64() }}"
                                                style="height:45px;" />
                                            <div style="margin-left:10px;">
                                                @php
                                                    $percent = ($rating->rating / 5) * 100;
                                                @endphp
                                                <div class="star-rating">
                                                    <div class="back-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <div class="front-stars" style="width: {{ $percent }}%">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>{{ $rating->comment }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> <!-- /.product-details-page-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#cart-btn').on('click', (e) => {
            e.preventDefault();
            $('#cart-form').submit();
        });
    </script>
@endsection
