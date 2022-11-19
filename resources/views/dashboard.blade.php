@extends('layouts.admin')

@section('css')
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    @include('components.admin.header', [
        'parent' => null,
        'child' => __('messages.dashboard'),
    ])
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10 mb-xl-10">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 4-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                        <!--end::Currency-->
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">69,700</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%
                                        </span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Expected Earnings</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-2 pb-4 d-flex align-items-center">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center me-5 me-xxl-7 pt-2">
                                    <div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px"
                                        data-kt-size="70" data-kt-line="11"></div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 pe-1">Shoes</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-boldest text-gray-700 min-w-70px text-end">$7,660</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center my-3">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 pe-1">Gaming</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-boldest text-gray-700 min-w-70px text-end">$2,820</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF">
                                        </div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-500 pe-1">Others</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-boldest text-gray-700 min-w-70px text-end">$45,257</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 4-->
                        <!--begin::Card widget 5-->
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{ $ordersCount }}</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-danger fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr068.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 14.4V3.00003C13 2.40003 12.6 2.00003 12 2.00003C11.4 2.00003 11 2.40003 11 3.00003V14.4H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 16.1071C5.07714 15.4771 5.52331 14.4 6.41421 14.4H17.5858C18.4767 14.4 18.9229 15.4771 18.2929 16.1071L12.7 21.7C12.3 22.1 11.7 22.1 11.3 21.7L5.7071 16.1071Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%
                                        </span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">{{ __('messages.orders') }}</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-boldest fs-6 text-dark">{{ __('messages.goal') }}</span>
                                        <span class="fw-bolder fs-6 text-gray-400">62%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                        <div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 5-->
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <!--begin::Card widget 6-->
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
                                        <!--end::Currency-->
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bolder text-dark me-2 lh-1">2,420</span>
                                        <!--end::Amount-->
                                        <!--begin::Badge-->
                                        <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center"
                                            style="height: 22px">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white ms-n1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.6%
                                        </span>
                                        <!--end::Badge-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">Average Daily Sales</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex align-items-end px-0 pb-0">
                                <!--begin::Chart-->
                                <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 6-->
                        <!--begin::Card widget 7-->
                        <div class="card card-flush h-md-50 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bolder text-dark me-2 lh-1">{{ $customersCount }}</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-gray-400 pt-1 fw-bold fs-6">{{ __('messages.customers') }}</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column justify-content-end">
                                <!--begin::Users group-->
                                <div class="symbol-group symbol-hover">
                                    @foreach ($users as $user)
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="{{ $user->name }}">
                                            <img src="{{ Avatar::create($user->name)->toBase64() }}" />
                                        </div>
                                    @endforeach
                                    <a href="{{ route('users.index') }}" class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-gray-900 text-gray-300 fs-8 fw-bolder">+42</span>
                                    </a>
                                </div>
                                <!--end::Users group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card widget 7-->
                    </div>
                    <!--begin::Col-->
                    <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
                        <!--begin::Chart widget 3-->
                        <div class="card card-flush overflow-hidden h-md-100">
                            <!--begin::Header-->
                            <div class="card-header py-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Sales This Months</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <a href="../../demo8/dist/apps/ecommerce/catalog/products.html"
                                        class="btn btn-sm btn-light-primary fw-bolder">Launch eCommerce App</a>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                <!--begin::Statistics-->
                                <div class="px-9 mb-5">
                                    <!--begin::Statistics-->
                                    <div class="d-flex mb-2">
                                        <span class="fs-4 fw-bold text-gray-400 me-1">$</span>
                                        <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">14,094</span>
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-bold text-gray-400">Another $48,346 to Goal</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Chart widget 3-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-6 mb-xl-10">
                        <!--begin::Tables widget 2-->
                        <div class="card h-md-100">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0">
                                <!--begin::Title-->
                                <h3 class="fw-bolder text-gray-900 m-0">Recent Orders</h3>
                                <!--end::Title-->
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20"
                                                height="20" rx="4" fill="black" />
                                            <rect x="11" y="11" width="2.6" height="2.6"
                                                rx="1.3" fill="black" />
                                            <rect x="15" y="11" width="2.6" height="2.6"
                                                rx="1.3" fill="black" />
                                            <rect x="7" y="11" width="2.6" height="2.6"
                                                rx="1.3" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mb-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Customer</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <!--begin::Menu item-->
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--end::Menu item-->
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Member Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">New Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator mt-3 opacity-75"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3 py-3">
                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body pt-2">
                                <!--begin::Nav-->
                                <ul class="nav nav-pills nav-pills-custom mb-3">
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                            <!--begin::Icon-->
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="metronic/assets/media/svg/products-categories/t-shirt.svg"
                                                    class="" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Subtitle-->
                                            <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">T-shirt</span>
                                            <!--end::Subtitle-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                            <!--begin::Icon-->
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="metronic/assets/media/svg/products-categories/gaming.svg"
                                                    class="" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Subtitle-->
                                            <span class="nav-text text-gray-700 fw-bolder fs-6 lh-1">Gaming</span>
                                            <!--end::Subtitle-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                            <!--begin::Icon-->
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="metronic/assets/media/svg/products-categories/watch.svg"
                                                    class="" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Subtitle-->
                                            <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Watch</span>
                                            <!--end::Subtitle-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <!--begin::Link-->
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                            <!--begin::Icon-->
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="metronic/assets/media/svg/products-categories/gloves.svg"
                                                    class="nav-icon" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Subtitle-->
                                            <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Gloves</span>
                                            <!--end::Subtitle-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="nav-item mb-3">
                                        <!--begin::Link-->
                                        <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4"
                                            data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
                                            <!--begin::Icon-->
                                            <div class="nav-icon">
                                                <img alt=""
                                                    src="metronic/assets/media/svg/products-categories/shoes.svg"
                                                    class="nav-icon" />
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Subtitle-->
                                            <span class="nav-text text-gray-600 fw-bolder fs-6 lh-1">Shoes</span>
                                            <!--end::Subtitle-->
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            <!--end::Bullet-->
                                        </a>
                                        <!--end::Link-->
                                    </li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Nav-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/210.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                1802</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2347</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$72.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$126.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/215.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1321</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$45.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/209.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-4312</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$84.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$168.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/197.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                1802</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-4312</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$32.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$312.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/178.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-3122</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$62.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/22.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1142</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$74.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$139.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/1.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                1324</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1523</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$43.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$231.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/24.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-5314</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$71.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$53.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/71.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-4222</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$23.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$213.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/41.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Elephant
                                                                2635</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1523</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$65.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$163.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/63.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Red
                                                                Laga</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2745</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$73.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/59.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-5173</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$54.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$173.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                    <!--begin::Tap pane-->
                                    <div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
                                        <!--begin::Table container-->
                                        <div class="table-responsive">
                                            <!--begin::Table-->
                                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                                        <th class="ps-0 w-50px">ITEM</th>
                                                        <th class="min-w-140px"></th>
                                                        <th class="text-end min-w-140px">QTY</th>
                                                        <th class="pe-0 text-end min-w-120px">PRICE</th>
                                                        <th class="pe-0 text-end min-w-120px">TOTAL PRICE</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/10.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2163</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x1</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$64.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$287.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/96.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-2162</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x2</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$76.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$51.00</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="metronic/assets/media/stock/ecommerce/13.gif"
                                                                class="w-50px ms-n1" alt="" />
                                                        </td>
                                                        <td class="ps-0">
                                                            <a href="../../demo8/dist/apps/ecommerce/catalog/edit-product.html"
                                                                class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
                                                            <span
                                                                class="text-gray-400 fw-bold fs-7 d-block text-start ps-0">Item:
                                                                #XDG-1537</span>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6 ps-0 text-end">x3</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$27.00</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span
                                                                class="text-gray-800 fw-bolder d-block fs-6">$167.00</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Tap pane-->
                                </div>
                                <!--end::Tab Content-->
                            </div>
                            <!--end: Card Body-->
                        </div>
                        <!--end::Tables widget 2-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-6 mb-5 mb-xl-10">
                        <!--begin::Chart widget 4-->
                        <div class="card card-flush overflow-hidden h-md-100">
                            <!--begin::Header-->
                            <div class="card-header py-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">Discounted Product Sales</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-6">Users from all channels</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button
                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-overflow="true">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20"
                                                    height="20" rx="4" fill="black" />
                                                <rect x="11" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="black" />
                                                <rect x="15" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="black" />
                                                <rect x="7" y="11" width="2.6" height="2.6"
                                                    rx="1.3" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                            data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                    <!--end::Menu-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                                <!--begin::Info-->
                                <div class="px-9 mb-5">
                                    <!--begin::Statistics-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Currency-->
                                        <span class="fs-4 fw-bold text-gray-400 align-self-start me-1">$</span>
                                        <!--end::Currency-->
                                        <!--begin::Value-->
                                        <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">3,706</span>
                                        <!--end::Value-->
                                        <!--begin::Label-->
                                        <span class="badge badge-success fs-6 lh-1 py-1 px-2 d-flex flex-center">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr067.svg-->
                                            <span class="svg-icon svg-icon-7 svg-icon-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.5"
                                                        d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                        fill="black" />
                                                    <path
                                                        d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->2.2%
                                        </span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Statistics-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-bold text-gray-400">Total Discounted Sales This Month</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Chart-->
                                <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Chart widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row gy-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12 mb-5 mb-xl-10">
                        <!--begin::Table Widget 4-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Card header-->
                            <div class="card-header pt-7">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-dark">{{ __('messages.latest_orders') }}</span>
                                </h3>
                                <!--end::Title-->
                                <!--begin::Actions-->
                                <div class="card-toolbar">
                                    <!--begin::Filters-->
                                    <div class="d-flex flex-stack flex-wrap gap-4">
                                        <!--begin::Destination-->
                                        <div class="d-flex align-items-center fw-bolder">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">Cateogry</div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="Show All" selected="selected">Show All</option>
                                                <option value="a">Category A</option>
                                                <option value="b">Category A</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Destination-->
                                        <!--begin::Status-->
                                        <div class="d-flex align-items-center fw-bolder">
                                            <!--begin::Label-->
                                            <div class="text-muted fs-7 me-2">Status</div>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto"
                                                data-control="select2" data-hide-search="true"
                                                data-dropdown-css-class="w-150px" data-placeholder="Select an option"
                                                data-kt-table-widget-4="filter_status">
                                                <option></option>
                                                <option value="Show All" selected="selected">Show All</option>
                                                <option value="Shipped">Shipped</option>
                                                <option value="Confirmed">Confirmed</option>
                                                <option value="Rejected">Rejected</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Search-->
                                        <div class="position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span
                                                class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                        height="2" rx="1"
                                                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-table-widget-4="search"
                                                class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Filters-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                                    <!--begin::Table head-->
                                    <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th class="min-w-100px">{{ __('messages.order_id') }}</th>
                                            <th class="text-end min-w-100px">{{ __('messages.creation_date') }}</th>
                                            <th class="text-end min-w-125px">{{ __('messages.customer') }}</th>
                                            <th class="text-end min-w-100px">{{ __('messages.total') }}</th>
                                            <th class="text-end min-w-100px">{{ __('messages.note') }}</th>
                                            <th class="text-end min-w-50px">{{ __('messages.status') }}</th>
                                            <th class="text-end"></th>
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bolder text-gray-600">
                                        <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                            <td colspan="2">
                                                <div class="d-flex align-items-center gap-3">
                                                    <a href="#"
                                                        class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                                        <img src="metronic/assets/media/stock/ecommerce/" alt=""
                                                            data-kt-table-widget-4="template_image" />
                                                    </a>
                                                    <div class="d-flex flex-column text-muted">
                                                        <a href="#" class="text-dark text-hover-primary fw-bolder"
                                                            data-kt-table-widget-4="template_name">Product name</a>
                                                        <div class="fs-7" data-kt-table-widget-4="template_description">
                                                            Product description</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7">Cost</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_cost">1</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7">Qty</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_qty">1</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7">Total</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_total">name</div>
                                            </td>
                                            <td class="text-end">
                                                <div class="text-dark fs-7 me-3">On hand</div>
                                                <div class="text-muted fs-7 fw-bolder"
                                                    data-kt-table-widget-4="template_stock">32</div>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('orders.show', ['order' => $order->id]) }}"
                                                        class="text-dark text-hover-primary">#EG000{{ $order->id }}</a>
                                                </td>
                                                <td class="text-end">{{ $order->created_at->format('d/m/Y') }}</td>
                                                <td class="text-end">
                                                    <div class="text-dark text-hover-primary">{{ $order->user->name }}
                                                    </div>
                                                </td>
                                                <td class="text-end">@money($order->total, 'VND')</td>
                                                <td class="text-end">
                                                    <span class="text-dark fw-bolder">{{ $order->note }}</span>
                                                </td>
                                                <td class="text-end">
                                                    @include('components.status', [
                                                        'status' => $order->status,
                                                    ])
                                                </td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px"
                                                        data-kt-table-widget-4="expand_row">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="11" y="18"
                                                                    width="12" height="2" rx="1"
                                                                    transform="rotate(-90 11 18)" fill="black" />
                                                                <rect x="6" y="11" width="12"
                                                                    height="2" rx="1" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect x="6" y="11" width="12"
                                                                    height="2" rx="1" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Table Widget 4-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection

@section('js')
    <script src="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('metronic/assets/js/widgets.bundle.js') }}"></script>
    {{-- <script src="{{ asset('metronic/assets/js/custom/widgets.js') }}"></script> --}}
    <script src="{{ Vite::asset('resources/js/dashboard.js') }}"></script>
    <!--end::Page Custom Javascript-->
@endsection
