@extends('layouts.guest')

@section('content')
    @include('components.guest.page_info', [
        'name' => 'Dịch vụ',
    ])

    <div class="container mx-auto pt-16 pb-24 px-8">
        <h2 class="about-title mb-6" data-aos="fade-up">DỊCH VỤ CỦA CHÚNG TÔI</h2>
        <div class="max-w-[800px]">
            <p class="about-text mb-12" data-aos="fade-up" data-aos-delay="100">
                Ứng dụng của chúng tôi mang đến cho bạn khả năng hiển thị tuyệt vời về toàn bộ mạng lưới hậu cần của bạn.
                Cho dù bạn đang quản lý một chuyến giao hàng hay giám sát hàng nghìn chuyến hàng, bạn đều có thể theo dõi vị
                trí chính xác của từng lô hàng theo thời gian thực.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-[#C1262E] overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('assets/service-1.svg') }}" alt="Vận tải Bắc Nam" class="w-full object-cover">
                <h3 class="service-text text-center py-4" style="color: #FFF;">VẬN TẢI BẮC NAM</h3>
            </div>

            <div class="bg-[#C1262E] overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('assets/service-2.svg') }}" alt="Xe tải chở hàng" class="w-full object-cover">
                <h3 class="service-text text-center py-4" style="color: #FFF;">XE TẢI CHỞ HÀNG</h3>
            </div>

            <div class="bg-[#C1262E] overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('assets/service-3.svg') }}" alt="Vận chuyển container" class="w-full object-cover">
                <h3 class="service-text text-center py-4" style="color: #FFF;">VẬN CHUYỂN CONTAINER</h3>
            </div>

            <div class="bg-[#C1262E] overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                <img src="{{ asset('assets/service-4.svg') }}" alt="Vận chuyển hàng siêu trọng" class="w-full object-cover">
                <h3 class="service-text text-center py-4" style="color: #FFF;">VẬN CHUYỂN HÀNG SIÊU TRỌNG</h3>
            </div>

            <div class="bg-[#C1262E] overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                <img src="{{ asset('assets/service-5.svg') }}" alt="Chuyển nhà trọn gói giá rẻ" class="w-full object-cover">
                <h3 class="service-text text-center py-4" style="color: #FFF;">CHUYỂN NHÀ TRỌN GÓI GIÁ RẺ</h3>
            </div>

            <div class="bg-[#C1262E] overflow-hidden" data-aos="fade-up" data-aos-delay="600">
                <img src="{{ asset('assets/service-6.svg') }}" alt="Chuyển văn phòng, kho xưởng"
                    class="w-full object-cover">
                <h3 class="service-text text-center py-4" style="color: #FFF;">CHUYỂN VĂN PHÒNG, KHO XƯỞNG</h3>
            </div>
        </div>
    </div>
    <div class="container mx-auto pb-12 px-8">
        <div class="relative bg-cover bg-center py-16" style="background-image: url('{{ asset('assets/quote-bg.png') }}');">
            <div class="absolute inset-0"></div>
            <div class="container mx-auto px-8 relative">
                <h2 class="text-center about-title mb-6" style="color: #FFF;" data-aos="fade-up">ĐĂNG KÝ NHẬN BÁO GIÁ</h2>
                <p class="text-center mb-8 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100"
                    style="color: #FFF;font-size: 18px;font-style: normal;font-weight: 400;line-height: 28px;">
                    Để nhận báo giá nhanh chóng và chính xác, hãy đăng ký ngay! Đội ngũ của Vertexco Logistics sẽ liên hệ và
                    tư vấn giải pháp vận chuyển tối ưu cho bạn.
                </p>

                <form action="{{ route('customers.store') }}" method="POST" class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div>
                        <div class="bg-white rounded transition-all focus-within:border-l-4 focus-within:border-[#C1262E]">
                            <label class="contact-form-label ml-4 pt-4 block">Tên</label>
                            <input type="text" name="name" class="w-full px-4 pb-4 pt-3 focus:outline-none" placeholder="Nhập tên của bạn"
                                required>
                        </div>
                        <div class="bg-white rounded my-5 transition-all focus-within:border-l-4 focus-within:border-[#C1262E]">
                            <label class="contact-form-label ml-4 pt-4 block">Email</label>
                            <input type="email" name="email" class="w-full px-4 pb-4 pt-3 focus:outline-none" placeholder="Nhập email của bạn"
                                required>
                        </div>
                        <div class="w-full">
                            <button type="submit"
                                class="bg-[#C1262E] text-white px-8 py-4.5 rounded hover:bg-[#A01F26] transition w-full">
                                Đăng ký
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="bg-white rounded transition-all focus-within:border-l-4 focus-within:border-[#C1262E]">
                            <label class="contact-form-label ml-4 pt-4 block">Số điện thoại</label>
                            <input type="tel" name="phone" class="w-full px-4 pb-4 pt-3 focus:outline-none"
                                placeholder="Nhập số điện thoại của bạn" required>
                        </div>
                        <div class="bg-white rounded mt-5 transition-all focus-within:border-l-4 focus-within:border-[#C1262E]">
                            <label class="contact-form-label ml-4 pt-4 block">Nội dung</label>
                            <textarea name="content" rows="4" class="w-full px-4 pb-4 pt-3 focus:outline-none" placeholder="Nhập nội dung"></textarea>
                        </div>
                    </div>
                </form>

                <p class="text-center text-white mt-12 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300" style="font-size: 24px;font-weight: 400;line-height: 38px;">
                    Cảm ơn bạn đã tin tưởng Vertexco Logistics cho nhu cầu vận chuyển của mình. Chúng tôi mong được lắng
                    nghe và đồng hành cùng bạn trên các hành trình vận chuyển.
                </p>

                <div class="text-center mt-8" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center bg-white px-8 py-3 rounded hover:bg-gray-100 transition" style="color: #000;font-size: 20px;font-style: normal;font-weight: 400;line-height: 30px;">
                        LIÊN HỆ NGAY
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M14.4297 6L20.4997 12.07L14.4297 18.14" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.5 12.0701H20.33" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
