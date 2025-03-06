@extends('layouts.guest')

@section('content')
    <div class="container mx-auto pt-12 pb-24 px-8">
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="w-full lg:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/about.png') }}" alt="Container ship" class="w-full shadow-lg">
            </div>

            <div class="w-full lg:w-1/2 space-y-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <div class="space-y-4">
                    <h2 class="about-title">Đối tác giao hàng đáng tin cậy của bạn</h2>
                    <p class="about-text">Trong bối cảnh thương mại điện tử và chuỗi cung ứng ngày càng phát triển, Vertexco
                        Logics tự hào là đối tác giao hàng đáng tin cậy, giúp doanh nghiệp và cá nhân tối ưu hóa quy trình
                        vận chuyển một cách hiệu quả và an toàn.</p>
                </div>

                <div class="space-y-4">
                    <h2 class="about-title">Câu chuyện của Vexterco Logictics</h2>
                    <p class="about-text">Vertexco Logistics được thành lập với sứ mệnh kết nối thế giới bằng những giải
                        pháp vận chuyển an toàn, nhanh chóng và hiệu quả. Chúng tôi không chỉ đơn thuần là một đơn vị
                        logistics, mà còn là đối tác chiến lược, giúp doanh nghiệp tối ưu chuỗi cung ứng và vươn xa trên thị
                        trường.</p>
                    <p class="about-text">Với đội ngũ giàu kinh nghiệm và hệ thống vận hành hiện đại, chúng tôi cam kết mang
                        đến dịch vụ minh bạch, chính xác và tối ưu nhất. Mỗi chuyến hàng không chỉ là một hành trình vận
                        chuyển, mà còn là hành trình của sự tin cậy và phát triển bền vững!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#C1262E] text-white py-24">
        <div class="container mx-auto px-8">
            <h2 class="text-[38px] font-semibold mb-16 leading-[60px] uppercase" data-aos="fade-up">TẠI SAO CHỌN VERTEXCO</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-14">
                <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="why-choose-title">CHUYÊN MÔN</h3>
                    <p class="why-choose-text">Đội ngũ của chúng tôi gồm các chuyên gia giàu kinh nghiệm, am hiểu sâu sắc về
                        thị trường logistics. Nhờ đó, Vertexco cung cấp giải pháp vận chuyển tối ưu, giúp doanh nghiệp nâng
                        cao hiệu quả và cạnh tranh vượt trội.</p>
                </div>

                <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="why-choose-title">KHÁCH HÀNG LÀ TRUNG TÂM</h3>
                    <p class="why-choose-text">Vertexco Logistics cam kết cung cấp dịch vụ linh hoạt, minh bạch và tối ưu
                        theo nhu cầu từng khách hàng, đảm bảo trải nghiệm logistics hiệu quả và đáng tin cậy.</p>
                </div>

                <div class="space-y-4" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="why-choose-title">MINH BẠCH</h3>
                    <p class="why-choose-text">Vertexco Logistics cam kết minh bạch trong mọi quy trình, từ báo giá đến vận
                        hành. Chúng tôi đảm bảo thông tin rõ ràng, chính xác, giúp khách hàng an tâm và chủ động trong mọi
                        quyết định.</p>
                </div>

                <div class="space-y-4" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="why-choose-title">ĐỔI MỚI</h3>
                    <p class="why-choose-text">Vertexco Logistics không ngừng ứng dụng công nghệ và cải tiến quy trình để
                        nâng cao hiệu quả vận chuyển. Chúng tôi luôn tìm kiếm những giải pháp tiên tiến, giúp tối ưu chi
                        phí, rút ngắn thời gian giao nhận và mang lại trải nghiệm tốt nhất cho khách hàng.</p>
                </div>

                <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="why-choose-title">HƯỚNG ĐẾN CỘNG ĐỒNG</h3>
                    <p class="why-choose-text">Vertexco Logistics cam kết đóng góp cho cộng đồng thông qua các hoạt động bền
                        vững và trách nhiệm xã hội. Chúng tôi không chỉ tập trung vào phát triển kinh doanh mà còn nỗ lực
                        tạo ra giá trị lâu dài cho xã hội và môi trường.</p>
                </div>

                <div class="space-y-4" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="why-choose-title">CỐ VẤN ĐÁNG TIN CẬY</h3>
                    <p class="why-choose-text">Vertexco Logistics không chỉ là nhà cung cấp dịch vụ mà còn là đối tác chiến
                        lược, luôn sẵn sàng tư vấn và đồng hành cùng khách hàng. Với kinh nghiệm chuyên sâu, chúng tôi giúp
                        doanh nghiệp đưa ra quyết định tối ưu, đảm bảo chuỗi cung ứng vận hành hiệu quả và bền vững.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-8 py-30 relative">
        <div class="flex flex-col lg:flex-row gap-16">
            <div class="w-full lg:w-1/2" data-aos="fade-right" data-aos-duration="1000">
                <h2 class="mb-8"
                    style="color: #1C1F35; font-size: 40px; font-style: normal; font-weight: 700; line-height: 60px; text-transform: uppercase;">
                    GIÁ TRỊ CỐT LÕI</h2>
                <div class="space-y-4 about-text">
                    <p>Vertexco Logistics phát triển dựa trên những giá trị cốt lõi, giúp chúng tôi mang đến giải pháp vận
                        chuyển tối ưu và bền vững.</p>
                    <p>Minh bạch là nguyên tắc hàng đầu, đảm bảo mọi quy trình rõ ràng, chính xác, giúp khách hàng dễ dàng
                        kiểm soát chuỗi cung ứng. Lấy khách hàng làm trung tâm, chúng tôi cung cấp dịch vụ linh hoạt, tận
                        tâm và phù hợp với từng nhu cầu.</p>
                    <p>Đổi mới giúp Vertexco Logistics không ngừng ứng dụng công nghệ, tối ưu chi phí và nâng cao hiệu suất
                        vận hành. Hướng đến cộng đồng, chúng tôi cam kết phát triển bền vững, bảo vệ môi trường và đóng góp
                        tích cực cho xã hội.</p>
                    <p>Với vai trò là cố vấn đáng tin cậy, chúng tôi đồng hành cùng khách hàng, tư vấn giải pháp hiệu quả,
                        giúp doanh nghiệp vận hành chuỗi cung ứng tối ưu và linh hoạt trước mọi thách thức.</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('assets/core-value-1.png') }}" alt="Container stacks"
                    class="w-[80%] h-auto object-cover shadow-lg">
                <div class="relative h-[300px]">
                    <img src="{{ asset('assets/core-value-2.png') }}" alt="Container ship"
                        class="absolute left-[120px] top-[-200px] w-[80%] h-auto object-cover shadow-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full bg-cover bg-no-repeat bg-center"
        style="background-image: url('{{ asset('assets/about-bg.png') }}'); aspect-ratio: 1361/292; min-height: 400px;">
        <div class="container mx-auto px-8">
            <div class="relative">
                <div class="absolute top-[-100px] w-full">
                    <div class="flex flex-col md:flex-row justify-center items-center max-w-[921px] mx-auto shadow-2xl">
                        <div class="bg-[#C1262E] p-8 text-white w-[307px] hover:scale-105 transition-transform duration-300"
                            style="border-radius: 10px 0px 0px 10px;" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="about-box-title mb-4">Linh hoạt</h3>
                            <p class="about-box-desc">Vertexco Logistics luôn thích ứng nhanh với mọi thay đổi, cung cấp giải pháp
                                vận chuyển tối ưu, đáp ứng nhu cầu đa dạng của khách hàng.</p>
                        </div>

                        <div class="bg-white p-8 w-[307px] hover:scale-105 transition-transform duration-300"
                            data-aos="fade-up" data-aos-delay="200">
                            <h3 class="about-box-title mb-4" style="color: #000;">Đoàn kết</h3>
                            <p class="about-box-desc" style="color: #7A7A7A;">Chúng tôi đề cao tinh thần hợp tác, gắn kết giữa đội
                                ngũ nhân sự, đối tác và khách hàng để cùng nhau tạo nên giá trị bền vững.</p>
                        </div>

                        <div class="bg-[#C1262E] p-8 text-white w-[307px] hover:scale-105 transition-transform duration-300"
                            style="border-radius: 0px 10px 10px 0px;" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="about-box-title mb-4">Phát triển</h3>
                            <p class="about-box-desc">Không ngừng đổi mới và nâng cao chất lượng dịch vụ, chúng tôi hướng đến sự
                                tăng trưởng bền vững, giúp khách hàng và đối tác vươn xa hơn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
