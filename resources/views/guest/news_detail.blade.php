@extends('layouts.guest')

@section('content')
    <div>
        <div class="w-full" data-aos="fade-in">
            <img src="{{ asset('assets/news-2.png') }}" alt="Tin tức" class="w-full shadow-lg">
        </div>
    </div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-24">
            <div class="lg:col-span-1 order-2 lg:order-1 hidden lg:block" data-aos="fade-right">
                <div class="space-y-4 mt-6 flex flex-col items-end">
                    <div class="border-b border-gray-200 pb-4 text-center">
                        <div style="color: #121416;font-size: 28px;font-style: normal;font-weight: 500;line-height: normal">
                            966</div>
                        <div
                            style="color: #A7A7A7; text-align: center; font-size: 18px; font-style: normal; font-weight: 400; line-height: 20px;">
                            Lượt xem</div>
                    </div>
                    <div class="mr-3">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                            target="_blank" class="text-blue-600 hover:text-blue-800">
                            <img src="{{ asset('assets/facebook.svg') }}" alt="Facebook" width="54" height="54">
                        </a>
                    </div>
                    <div class="mr-3">
                        <a href="https://zalo.me/zalo-share?u={{ urlencode(request()->url()) }}" target="_blank"
                            class="text-blue-500 hover:text-blue-700">
                            <img src="{{ asset('assets/zalo.png') }}" alt="Zalo" width="54" height="54">
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 order-1 lg:order-2" data-aos="fade-left">
                <div class="mt-6 sm:mt-8 text-justify">
                    <h1 class="text-lg sm:text-xl lg:text-2xl font-bold mb-4 sm:mb-6">1.Tuyển Dụng Nhân Sự – Cơ Hội Nghề
                        Nghiệp Hấp Dẫn</h1>
                    <div class="space-y-4 sm:space-y-6 text-sm sm:text-base">
                        <p>
                            Bạn đang tìm kiếm một công việc ổn định với môi trường làm việc chuyên nghiệp? Hãy gia nhập
                            đội ngũ của chúng tôi để phát triển bản thân và thăng tiến trong sự nghiệp! Chúng tôi đang
                            tuyển dụng nhiều vị trí hấp dẫn với chế độ đãi ngộ tốt.
                        </p>

                        <p>
                            Hiện tại, chúng tôi cần tuyển nhân viên kinh doanh, nhân viên marketing và nhân viên thiết kế đồ
                            họa.
                            Nhân viên kinh doanh sẽ đảm nhận việc tìm kiếm, tư vấn khách hàng và chốt đơn hàng. Yêu cầu công
                            việc
                            bao gồm kỹ năng giao tiếp tốt, năng động và đam mê kinh doanh. Quyền lợi dành cho vị trí này bao
                            gồm
                            lương cứng cộng hoa hồng hấp dẫn và thưởng theo doanh số.
                        </p>

                        <p>
                            Vị trí nhân viên marketing sẽ chịu trách nhiệm xây dựng nội dung, chạy quảng cáo và quản lý
                            fanpage.
                            Ứng viên cần có kinh nghiệm trong lĩnh vực marketing, khả năng sáng tạo và chủ động trong công
                            việc.
                            Khi làm việc tại công ty, bạn sẽ được hưởng thu nhập cạnh tranh cùng môi trường làm việc năng
                            động.
                        </p>
                    </div>
                    <div class="my-6 sm:my-8">
                        <img src="{{ asset('assets/news-2.png') }}" alt="Tin tức" class="w-full rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 sm:mt-12" data-aos="fade-up">
            <h2 class="text-xl sm:text-2xl lg:text-[28px] font-medium mb-6 sm:mb-8 text-[#121416] tracking-wider uppercase">
                BÀI VIẾT LIÊN QUAN
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <!-- Bài viết liên quan 1 -->
                <div class="group transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/news.png') }}" alt="Tin tức liên quan"
                            class="w-full h-[280px] object-cover mb-4 transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div>
                        <h3 class="news-related-title mb-2 group-hover:text-[#C1262E] transition-colors">Integer Maecenas
                            Eget Viverra.</h3>
                        <p class="news-related-text mb-3">Aenean eleifend ante maecenas pulvinar montes lorem et pede.</p>
                        <div class="flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19Z"
                                    stroke="#121416" stroke-opacity="0.81" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.0003 11.9997L9.66699 13.5553M12.0003 8.11084V11.9997" stroke="#121416"
                                    stroke-opacity="0.81" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="news-detail-date">10 THÁNG 2, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Bài viết liên quan 2 -->
                <div class="group transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/news.png') }}" alt="Tin tức liên quan"
                            class="w-full h-[280px] object-cover mb-4 transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div>
                        <h3 class="news-related-title mb-2 group-hover:text-[#C1262E] transition-colors">Integer Maecenas
                            Eget Viverra.</h3>
                        <p class="news-related-text mb-3">Aenean eleifend ante maecenas pulvinar montes lorem et pede.</p>
                        <div class="flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19Z"
                                    stroke="#121416" stroke-opacity="0.81" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12.0003 11.9997L9.66699 13.5553M12.0003 8.11084V11.9997" stroke="#121416"
                                    stroke-opacity="0.81" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="news-detail-date">10 THÁNG 2, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Bài viết liên quan 3 -->
                <div class="group transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/news.png') }}" alt="Tin tức liên quan"
                            class="w-full h-[280px] object-cover mb-4 transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div>
                        <h3 class="news-related-title mb-2 group-hover:text-[#C1262E] transition-colors">Integer Maecenas
                            Eget Viverra.</h3>
                        <p class="news-related-text mb-3">Aenean eleifend ante maecenas pulvinar montes lorem et pede.</p>
                        <div class="flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19Z"
                                    stroke="#121416" stroke-opacity="0.81" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.0003 11.9997L9.66699 13.5553M12.0003 8.11084V11.9997" stroke="#121416"
                                    stroke-opacity="0.81" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="news-detail-date">10 THÁNG 2, 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Bài viết liên quan 4 -->
                <div class="group transition-all duration-300 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="overflow-hidden">
                        <img src="{{ asset('assets/news.png') }}" alt="Tin tức liên quan"
                            class="w-full h-[280px] object-cover mb-4 transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div>
                        <h3 class="news-related-title mb-2 group-hover:text-[#C1262E] transition-colors">Integer Maecenas
                            Eget Viverra.</h3>
                        <p class="news-related-text mb-3">Aenean eleifend ante maecenas pulvinar montes lorem et pede.</p>
                        <div class="flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19Z"
                                    stroke="#121416" stroke-opacity="0.81" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.0003 11.9997L9.66699 13.5553M12.0003 8.11084V11.9997" stroke="#121416"
                                    stroke-opacity="0.81" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="news-detail-date">10 THÁNG 2, 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
