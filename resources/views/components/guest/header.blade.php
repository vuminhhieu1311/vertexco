<nav class="bg-white">
    <div class="container flex flex-wrap items-center justify-between mx-auto px-8">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img width="190" src="{{ asset('assets/vertexco-logo.svg') }}" class="-mt-1" alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li class="header-menu-item active">
                    <a href="/" class="block py-2 text-red-600 rounded-sm md:bg-transparent md:p-0" aria-current="page">Trang chủ</a>
                </li>
                <li class="header-menu-item">
                    <a href="/about" class="block py-2 text-gray-900 rounded-sm hover:text-red-600 md:p-0">Về chúng tôi</a>
                </li>
                <li class="header-menu-item">
                    <a href="/services" class="block py-2 text-gray-900 rounded-sm hover:text-red-600 md:p-0">Dịch vụ</a>
                </li>
                <li class="header-menu-item">
                    <a href="/pricing" class="block py-2 text-gray-900 rounded-sm hover:text-red-600 md:p-0">Bảng giá</a>
                </li>
                <li class="header-menu-item">
                    <a href="/contact" class="block py-2 text-gray-900 rounded-sm hover:text-red-600 md:p-0">Liên hệ</a>
                </li>
                <li class="header-menu-item">
                    <a href="/careers" class="block py-2 text-gray-900 rounded-sm hover:text-red-600 md:p-0">Tuyển dụng</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
