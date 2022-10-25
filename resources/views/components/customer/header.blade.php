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
                    <!-- Modal: donate now Starts -->
                    <a class="thm-btn pt-5 pb-5 mt-5 letter-spacing-1" data-toggle="modal" href="#modal-donate-now"
                        style="display:flex;align-items:center">
                        <span class="material-icons-outlined mr-10" style="font-size:18px">shopping_cart</span>
                        {{ __('messages.my_cart') }}
                    </a>
                    <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel">
                        <div class="modal-dialog style-one" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Make an Appoinment</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="appoinment-form-outer">
                                        <form action="http://vision.to/garden-plant/contact.html" method="post">
                                            <!--Form Portlet-->
                                            <div class="form-portlet">
                                                <h3>Lorem ipsum dolor.</h3>
                                                <div class="row clearfix">
                                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                        <div class="field-label">Name <span class="required">*</span>
                                                        </div>
                                                        <input type="text" required="" placeholder="First Name"
                                                            value="" name="name">
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Email <span class="required">*</span>
                                                        </div>
                                                        <input type="email" required="" placeholder="Email"
                                                            value="" name="name">
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Phone <span class="required">*</span>
                                                        </div>
                                                        <input type="text" required="" placeholder="Phone"
                                                            value="" name="name">
                                                    </div>

                                                    <div class="form-group date col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Appoinment Date <span
                                                                class="required">*</span></div>
                                                        <input class="datepicker" type="text" required=""
                                                            placeholder="MM/DD/Year" value="" name="name">
                                                    </div>

                                                    <div class="form-group time col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Time<span class="required">*</span>
                                                        </div>
                                                        <input type="text" class="timepicker" required=""
                                                            placeholder="Time" value="" name="name">
                                                    </div>

                                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                        <div class="field-label">Address <span
                                                                class="required">*</span></div>
                                                        <input type="text" required="" placeholder="Address"
                                                            value="" name="name">
                                                    </div>
                                                    <div class="text-center"><button
                                                            class="thm-btn mt-30 mb-30 pt-10 pb-10 font-16"
                                                            type="submit">Appoinment</button></div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal: donate now Ends -->
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
        <div class="curve scroll-to-target" data-target="#sidebar-section"><span
                class="icon fa fa-arrow-down"></span></div>
    </div>
</section>
<!--End Page Title-->
