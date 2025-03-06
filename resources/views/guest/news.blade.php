@extends('layouts.guest')

@section('content')
    @include('components.guest.page_info', [
        'name' => 'Tin tức',
    ])

    <div class="container mx-auto px-4 py-8">
        <div class="border-b border-gray-200 pb-4 mt-8">
            <h2 class="text-2xl font-bold">TẤT CẢ BÀI VIẾT</h2>
        </div>

        <div class="space-y-10 mt-16">
            @for ($i = 1; $i <= 8; $i++)
                <div class="flex flex-col md:flex-row gap-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $i * 100 }}">
                    <div class="w-full md:w-1/3">
                        <img src="{{ asset('assets/news.png') }}" class="w-full h-64 object-cover rounded-lg">
                    </div>
                    <div class="w-full md:w-2/3 flex flex-col justify-center">
                        <div class="news-card-tag mb-2">BLOGS</div>
                        <h3 class="news-card-title mb-3">
                            <a href="{{ route('news.detail', ['slug' => 'vertexco-cung-cap-dich-vu-gom-hang-le-va-chuyen-hang-nguyen-container']) }}" class="hover:text-[#C1262E] transition duration-300">
                                Vertexco cung cấp dịch vụ gom hàng lẻ và chuyển hàng nguyên container
                            </a>
                        </h3>
                        <p class="news-card-desc">Với cam kết vì một tương lai xanh, Vertexco không chỉ giúp khách hàng tối
                            ưu chi phí mà còn chung tay xây dựng hệ sinh thái. Với cam kết vì một tương lai xanh, Vertexco
                            không chỉ giúp khách hàng tối ưu chi phí mà còn chung tay xây dựng hệ sinh thái..
                        </p>
                    </div>
                </div>
            @endfor
        </div>

        {{-- <div class="mt-8">
            {{ $news->links() }}
        </div> --}}
    </div>
@endsection
