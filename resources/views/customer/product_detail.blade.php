@extends('layouts.customer')

@section('content')
    <div class="page-wrapper">
        <!--Sidebar Section-->
        <div class="sidebar-section no-bg" id="sidebar-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="col-md-9 col-sm-8 col-xs-12 content-side pull-right">
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
                                    <span>{{ __('messages.price') }} : <b>{{ $product->price }} VND</b></span>
                                    <form id="cart-form" method="POST" action="{{ route('cart.save', ['product' => $product->id]) }}">
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
                                        <li data-tab-name="description" class="active"><span>Descripton</span></li>
                                        <li data-tab-name="specification"><span>Specification</span></li>
                                        <li data-tab-name="review"><span>Review (0)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details-tab-content row">
                                <div class="col-lg-12" id="description">
                                    {!! $product->description !!}
                                </div>
                                <div class="col-lg-12" id="specification">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.</p>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>
                                <div class="col-lg-12" id="review">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur.</p>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>
                            </div>
                        </div> <!-- /.product-details-page-content -->
                    </div>
                    <!--Sidebar-->
                    <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
                        <aside class="sidebar">
                            <!-- Search Form -->
                            <div class="widget search-form">
                                <h3>Search</h3>

                                <form method="post" action="http://vision.to/garden-plant/blog.html">
                                    <div class="form-group">
                                        <input type="search" name="search" value="" placeholder="Search">
                                        <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                            <!--Categories-->
                            <div class="widget links-widget">
                                <h3>CATEGORIES</h3>
                                <ul>
                                    <li><a href="#">Logistics Management</a></li>
                                    <li><a href="#">Cargo Transport</a></li>
                                    <li><a href="#">Chain Supply Management</a></li>
                                    <li><a href="#">Warehouse</a></li>
                                    <li><a href="#">Distribution Network</a></li>
                                </ul>
                            </div>
                        </aside>
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
