<nav class="bg-white" x-data="{ mobileMenuOpen: false }">
    <div class="container flex flex-wrap items-center justify-between mx-auto px-8">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img width="190" src="{{ asset('assets/vertexco-logo.svg') }}" class="-mt-1" alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false"
            @click="mobileMenuOpen = !mobileMenuOpen">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                <li class="header-menu-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="/" class="block py-2 {{ request()->is('/') ? 'text-red-600' : 'text-gray-900 hover:text-red-600' }} rounded-sm md:bg-transparent md:p-0" {{ request()->is('/') ? 'aria-current="page"' : '' }}>Trang chủ</a>
                </li>
                <li class="header-menu-item {{ request()->is('about') ? 'active' : '' }}">
                    <a href="/about" class="block py-2 {{ request()->is('about') ? 'text-red-600' : 'text-gray-900 hover:text-red-600' }} rounded-sm md:p-0" {{ request()->is('about') ? 'aria-current="page"' : '' }}>Về chúng tôi</a>
                </li>
                <li class="header-menu-item {{ request()->is('services') ? 'active' : '' }}">
                    <a href="/services" class="block py-2 {{ request()->is('services') ? 'text-red-600' : 'text-gray-900 hover:text-red-600' }} rounded-sm md:p-0" {{ request()->is('services') ? 'aria-current="page"' : '' }}>Dịch vụ</a>
                </li>
                <li class="header-menu-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a href="/contact" class="block py-2 {{ request()->is('contact') ? 'text-red-600' : 'text-gray-900 hover:text-red-600' }} rounded-sm md:p-0" {{ request()->is('contact') ? 'aria-current="page"' : '' }}>Liên hệ</a>
                </li>
                <li class="header-menu-item {{ request()->is('news') ? 'active' : '' }}">
                    <a href="/news" class="block py-2 {{ request()->is('news') ? 'text-red-600' : 'text-gray-900 hover:text-red-600' }} rounded-sm md:p-0" {{ request()->is('news') ? 'aria-current="page"' : '' }}>Tin tức</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Drawer -->
        <div x-show="mobileMenuOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform md:hidden"
            @click.away="mobileMenuOpen = false">

            <div class="p-4">
                <div class="flex items-center justify-between mb-6">
                    <img width="150" src="{{ asset('assets/vertexco-logo.svg') }}" alt="Logo" />
                    <button @click="mobileMenuOpen = false" class="p-2 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <ul class="space-y-4">
                    <li>
                        <a href="/" class="block py-2 text-red-600" aria-current="page">Trang chủ</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-2 text-gray-900 hover:text-red-600">Về chúng tôi</a>
                    </li>
                    <li>
                        <a href="/services" class="block py-2 text-gray-900 hover:text-red-600">Dịch vụ</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 text-gray-900 hover:text-red-600">Liên hệ</a>
                    </li>
                    <li>
                        <a href="/news" class="block py-2 text-gray-900 hover:text-red-600">Tin tức</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
