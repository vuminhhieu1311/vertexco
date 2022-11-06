@extends('layouts.customer')

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
                                        <span>{{ __('messages.price') }}: <b>{{ $product->price }} VND</b></span>
                                        <a href="#"
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
                            <h3>Search</h3>
                            <form method="post" action="http://vision.to/garden-plant/blog.html">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="Search">
                                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title">
                                <h3>Recent Posts</h3>
                            </div>
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img
                                            src="garden-plant/images/resource/thumb-1.jpg" alt=""></a></div>
                                <h4><a href="#">Fusce in odio ac diam finibus tempus.</a></h4>
                            </div>
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img
                                            src="garden-plant/images/resource/thumb-2.jpg" alt=""></a></div>
                                <h4><a href="#">Massa sem dignissim elit: Sit amet cursus massa</a></h4>
                            </div>
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img
                                            src="garden-plant/images/resource/thumb-3.jpg" alt=""></a></div>
                                <h4><a href="#">Ellentesque non laoreet risus, id elementum purus. </a></h4>
                            </div>
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
                        <!--Links Widget-->
                        <div class="widget popular-tags">
                            <h3>popular Tags</h3>
                            <div class="tags">
                                <a href="#">transport</a>
                                <a href="#">Frieght</a>
                                <a href="#">Warehouse</a>
                                <a href="#">Logistics</a>
                                <a href="#">Cargo</a>
                                <a href="#">GARDEN CARE</a>
                                <a href="#">Warehouse</a>
                                <a href="#">Security</a>
                            </div>
                        </div>

                        <!--Reviews Widget-->
                        <div class="widget review-widget">
                            <h3>Testimonials</h3>
                            <!--Testimonials Slider-->
                            <div class="testimonial-slider">
                                <div class="slider">
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in
                                                ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris
                                                ultricies nisi eget velit bibendum, sit amet euismod mi gravida.”
                                            </p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img
                                                        class="img-circle"
                                                        src="garden-plant/images/resource/author-thumb-2.jpg"
                                                        alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>William Perez</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in
                                                ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris,
                                                sit amet euismod mi gravida.”</p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img
                                                        class="img-circle"
                                                        src="garden-plant/images/resource/author-thumb-3.jpg"
                                                        alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>Sara Millin</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in
                                                ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris
                                                ultricies nisi eget velit bibendum, sit gravida.”</p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img
                                                        class="img-circle"
                                                        src="garden-plant/images/resource/author-thumb-2.jpg"
                                                        alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>William Perez</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in
                                                ligula leo. velit bibendum, sit amet euismod mi gravida. Cum sociis
                                                natoque penatibus et magnis dis parturient montes, nascetur
                                                ridiculus mus.”</p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img
                                                        class="img-circle"
                                                        src="garden-plant/images/resource/author-thumb-3.jpg"
                                                        alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>Sara Millin</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
