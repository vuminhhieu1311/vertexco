@extends('layouts.customer')

@section('css')
    <style>
        label.radio-variant {
            cursor: pointer
        }

        label.radio-variant input {
            position: absolute;
            top: 0;
            left: 0;
            visibility: hidden;
            pointer-events: none
        }

        label.radio-variant span {
            padding: 10px 15px;
            border: 1px solid #ddd;
            display: inline-block;
            color: #666;
            border-radius: 3px;
            text-transform: uppercase
        }

        label.radio-variant input:checked+span {
            border-color: #FF7B54;
            background-color: #FF7B54;
            color: #fff
        }

        .variant-label {
            text-transform: uppercase;
            font-size: 13px;
            font-weight: normal;
            margin-right: 15px;
            color: #000;
        }
    </style>
@endsection

@section('content')
    <!-- Main Container -->
    <section class="main-container col1-layout">
        <div class="container">
            <div class="row">
                <div class="product-view">
                    <div class="product-essential">
                        <form method="POST" action="{{ route('cart.save', ['product' => $product->id]) }}">
                            @csrf
                            <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                                <div class="product-image">
                                    <div class="product-full">
                                        <div class="new-label new-top-left"> New </div>
                                        <img id="product-zoom" style="height:400px;object-fit:contain;"
                                            src="{{ asset($product->avatar_url) }}"
                                            data-zoom-image="{{ asset($product->avatar_url) }}">
                                    </div>
                                    <div class="more-views">
                                        <div class="slider-items-products">
                                            <div id="jtv-more-views-img"
                                                class="product-flexslider hidden-buttons product-img-thumb">
                                                <div class="slider-items slider-width-col4 block-content">
                                                    @foreach ($product->images as $image)
                                                        <div class="more-views-items">
                                                            <a href="#" data-image="{{ asset($image->url) }}"
                                                                data-zoom-image="{{ asset($image->url) }}">
                                                                <img id="product-zoom"
                                                                    style="height:100px;object-fit:contain;"
                                                                    src="{{ asset($image->url) }}">
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                <div class="product-name">
                                    <h1>{{ $product->name }}</h1>
                                </div>
                                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price-block">
                                    <div class="price-box">
                                        <p class="special-price"><span class="price">@money($product->final_price, 'VND')</span></p>
                                        @if ($product->price != $product->final_price)
                                            <p class="old-price"><span class="price">@money($product->price, 'VND')</span></p>
                                        @endif
                                        <p class="availability in-stock"><span>In Stock</span></p>
                                    </div>
                                </div>
                                <div class="short-description">
                                    {!! $product->description !!}
                                </div>
                                <div class="add-to-box" style="border-bottom:none;">
                                    <div style="display:flex;align-items:center;">
                                        <div style="width:80px;">
                                            <h6 class="variant-label">{{ __('messages.size') }}:</h6>
                                        </div>
                                        <div>
                                            @foreach ($sizes as $key => $size)
                                                <label class="radio-variant">
                                                    <input type="radio" name="size_id" value="{{ $size->id }}"
                                                        @if ($key === 0) checked @endif><span>{{ $size->value }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div style="display:flex;align-items:center;margin:10px 0;">
                                        <div style="width:80px;">
                                            <h6 class="variant-label">{{ __('messages.color') }}:</h6>
                                        </div>
                                        <div>
                                            @foreach ($colors as $key => $color)
                                                <label class="radio-variant">
                                                    <input type="radio" name="color_id" value="{{ $color->id }}"
                                                        @if ($key === 0) checked @endif><span>{{ $color->value }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <label>Quantity:</label>
                                                <button
                                                    onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) result.value--;return false;"
                                                    class="reduced items-count" type="button"><i
                                                        class="fa fa-minus">&nbsp;</i></button>
                                                <input type="text" class="input-text qty" value="1" maxlength="12" id="qty" name="quantity">
                                                <button
                                                    onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                    class="increase items-count" type="button"><i
                                                        class="fa fa-plus">&nbsp;</i></button>
                                            </div>
                                        </div>
                                        <button class="button btn-cart" type="submit"><i class="fa fa-shopping-cart"></i>
                                            {{ __('messages.add_to_cart') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                        <li class="active">
                            <a href="#product_tabs_description" data-toggle="tab">{{ __('messages.description') }}</a>
                        </li>
                        <li>
                            <a href="#reviews_tabs" data-toggle="tab">Reviews</a>
                        </li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="product_tabs_description">
                            <div class="std">
                                {!! $product->description !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews_tabs">
                            <div class="box-collateral box-reviews" id="customer-reviews">
                                <div class="box-reviews1">
                                    <div class="form-add">
                                        <form id="review-form" method="post"
                                            action="http://www.jtvcommerce.com/review/product/post/id/176/">
                                            <h3>Write Your Own Review</h3>
                                            <fieldset>
                                                <h4>How do you rate this product? <em class="required">*</em></h4>
                                                <span id="input-message-box"></span>
                                                <table id="product-review-table" class="data-table">
                                                    <thead>
                                                        <tr class="first last">
                                                            <th>&nbsp;</th>
                                                            <th><span class="nobr">1 *</span></th>
                                                            <th><span class="nobr">2 *</span></th>
                                                            <th><span class="nobr">3 *</span></th>
                                                            <th><span class="nobr">4 *</span></th>
                                                            <th><span class="nobr">5 *</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="first odd">
                                                            <th>Price</th>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="11" id="Price_1" name="ratings[3]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="12" id="Price_2" name="ratings[3]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="13" id="Price_3" name="ratings[3]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="14" id="Price_4" name="ratings[3]"></td>
                                                            <td class="value last"><input type="radio" class="radio"
                                                                    value="15" id="Price_5" name="ratings[3]"></td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th>Value</th>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="6" id="Value_1" name="ratings[2]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="7" id="Value_2" name="ratings[2]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="8" id="Value_3" name="ratings[2]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="9" id="Value_4" name="ratings[2]"></td>
                                                            <td class="value last"><input type="radio" class="radio"
                                                                    value="10" id="Value_5" name="ratings[2]"></td>
                                                        </tr>
                                                        <tr class="last odd">
                                                            <th>Quality</th>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="1" id="Quality_1" name="ratings[1]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="2" id="Quality_2" name="ratings[1]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="3" id="Quality_3" name="ratings[1]"></td>
                                                            <td class="value"><input type="radio" class="radio"
                                                                    value="4" id="Quality_4" name="ratings[1]"></td>
                                                            <td class="value last"><input type="radio" class="radio"
                                                                    value="5" id="Quality_5" name="ratings[1]"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <input type="hidden" value="" class="validate-rating"
                                                    name="validate_rating">
                                                <div class="review1">
                                                    <ul class="form-list">
                                                        <li>
                                                            <label class="required"
                                                                for="nickname_field">Nickname<em>*</em></label>
                                                            <div class="input-box">
                                                                <input type="text" class="input-text"
                                                                    id="nickname_field" name="nickname">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <label class="required"
                                                                for="summary_field">Summary<em>*</em></label>
                                                            <div class="input-box">
                                                                <input type="text" class="input-text"
                                                                    id="summary_field" name="title">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="review2">
                                                    <ul>
                                                        <li>
                                                            <label class="required "
                                                                for="review_field">Review<em>*</em></label>
                                                            <div class="input-box">
                                                                <textarea rows="3" cols="5" id="review_field" name="detail"></textarea>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="buttons-set">
                                                        <button class="button submit" title="Submit Review"
                                                            type="submit"><span>Submit Review</span></button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="box-reviews2">
                                    <h3>Customer Reviews</h3>
                                    <div class="box visible">
                                        <ul>
                                            <li>
                                                <table class="ratings-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Value</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Quality</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Price</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="review">
                                                    <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                                    <small>Review by <span>Sophia </span>on 15/01/2018 </small>
                                                    <div class="review-txt">Pellentesque aliquet, sem eget laoreet
                                                        ultrices, ipsum metus feugiat sem, quis fermentum turpis
                                                        eros eget velit. Donec ac tempus ante.</div>
                                                </div>
                                            </li>
                                            <li class="even">
                                                <table class="ratings-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Value</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Quality</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Price</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="review">
                                                    <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                                    <small>Review by <span>William</span>on 05/02/2018 </small>
                                                    <div class="review-txt">Morbi ornare lectus quis justo gravida
                                                        semper. Nulla tellus mi, vulputate adipiscing cursus eu,
                                                        suscipit id nulla. Donec a neque libero.</div>
                                                </div>
                                            </li>
                                            <li>
                                                <table class="ratings-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Value</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Quality</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Price</th>
                                                            <td>
                                                                <div class="rating"> <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="review">
                                                    <h6><a href="#">Lorem ipsum dolor sit amet</a></h6>
                                                    <small>Review by <span> Mason</span>on 10/02/2018 </small>
                                                    <div class="review-txt last">Nam fringilla augue nec est
                                                        tristique auctor. Donec non est at libero vulputate rutrum.
                                                        Morbi ornare lectus quis justo gravida semper.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="actions"> <a class="button view-all" id="revies-button"
                                            href="#"><span><span>View all</span></span></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
@endsection

@section('js')
@endsection
