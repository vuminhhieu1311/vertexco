<!-- Main Header -->
<header class="main-header" id="main-header">
    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container clearfix">
            <!--Outer Box-->
            <div class="outer-box">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('garden-plant/images/logo.png') }}"
                            alt="garnen-help"></a>
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
                            <li class="dropdown current"><a href="{{ route('home') }}">Home</a>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="dropdown"><a href="#">Feature Service</a>
                                <ul>
                                    <li><a href="feature-service-one.html">Feature Service One</a></li>
                                    <li><a href="feature-service-two.html">Feature Service Two</a></li>
                                    <li><a href="feature-service-details.html">Feature Service Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">{{ __('messages.language') }}</a>
                                <ul>
                                    <li><a href="{{ route('update-language', ['lang' => 'en']) }}">English</a></li>
                                    <li><a href="{{ route('update-language', ['lang' => 'vi']) }}">Vietnam</a></li>
                                </ul>
                            </li>
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
                    <a class="thm-btn pt-5 pb-5 mt-5 letter-spacing-1" href="{{ route('cart.show') }}"
                        style="display:flex;align-items:center">
                        <span class="material-icons-outlined mr-10" style="font-size:18px">shopping_cart</span>
                        {{ __('messages.my_cart') }}
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
        <h1 style="padding-top: 50px;">Shop Page</h1>
    </div>
    <!--Go Down Button-->
    <div class="go-down">
        <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span>
        </div>
    </div>
</section>
<!--End Page Title-->
