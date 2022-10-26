@extends('layouts.customer')

@section('content')
    <section class="cart-page p-60" id="sidebar-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-3">
                    <table class="table cart-table">
                        <thead>
                            <tr>
                                <th class="preview">Preview</th>
                                <th class="product">Product</th>
                                <th class="price">Price</th>
                                <th class="quantity">Quantity</th>
                                <th class="total">Total</th>
                                <th class="del-item">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $id => $item)
                                <tr>
                                    <td class="preview">
                                        <img src="{{ asset(Storage::url($item->options->avatar_url)) }}" style="width:200px;height:200px;">
                                    </td>
                                    <td class="product">{{ $item->name }}</td>
                                    <td class="price">{{ $item->price }} </td>
                                    <td class="quantity">
                                        <div class="select-box">
                                            <select>
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="total">
                                        $25
                                    </td>
                                    <td class="del-item">
                                        <i class="fa fa-close"></i>
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
                    <div class="proceed-to-checkout">
                        <span class="">Total: <span>$25</span></span>
                        <a href="#" class="hvr-bounce-to-right">Proceed to
                            checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
