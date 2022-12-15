<!-- Main Header -->
<header class="main-header" id="main-header">
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container clearfix">
            <!--Outer Box-->
            <div class="outer-box">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('logo.png') }}" style="height:100px;width:300px;" alt="logo">
                    </a>
                </div>
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation">
                            <li class="dropdown">
                                <a href="{{ route('home') }}">{{ __('messages.home') }}</a>
                            </li>
                            <li class="dropdown"><a href="#">{{ __('messages.language') }}</a>
                                <ul>
                                    <li><a href="{{ route('update-language', ['lang' => 'en']) }}">English</a></li>
                                    <li><a href="{{ route('update-language', ['lang' => 'vi']) }}">Vietnam</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('order_history') }}">{{ __('messages.my_order') }}</a></li>
                            @if (!auth()->user())
                                <li><a href="{{ route('login') }}">{{ __('messages.sign_in') }}</a></li>
                            @else
                                <li id="logout-btn"><a href="#">{{ __('messages.sign_out') }}</a></li>
                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            @endif
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
                <!--Cart Button-->
                <div class="appoinment-btn">
                    <a class="thm-btn pt-5 pb-5 p-20 mt-5 letter-spacing-1" href="{{ route('cart.show') }}"
                        style="display:flex;align-items:center">
                        <span class="material-icons-outlined mr-10" style="font-size:18px">shopping_cart</span>
                        {{ __('messages.my_cart') }}
                        <span id="cart-count">&nbsp;({{ Cart::count() }})</span>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- Header Lower End-->
</header>
<!--End Main Header -->
<!--Page Title-->
<section class="page-title"
    style="{{ 'background-image:url(' . asset('garden-plant/images/background/page-title-1.jpg') . ');' }}"">
    <div class="auto-container">
        <h1 style="padding-top: 50px;">
            @if (Route::is('home'))
                E-garden
            @elseif (Route::is('products.detail'))
                {{ __('messages.product_detail') }}
            @elseif (Route::is('order_history'))
                {{ __('messages.my_order') }}
            @elseif (Route::is('cart.*'))
                {{ __('messages.my_cart') }}
            @elseif (Route::is('checkout'))
                {{ __('messages.checkout') }}
            @elseif (Route::is('order_detail'))
                {{ __('messages.my_order') }}
            @endif
        </h1>
    </div>
    <!--Go Down Button-->
    <div class="go-down">
        <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span>
        </div>
    </div>
</section>
<!--End Page Title-->
