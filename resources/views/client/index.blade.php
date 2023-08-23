@extends('client.layout')
@section('pageTitle', 'Phụ kiện thông minh cho gia đình bạn')
@section('description',
    'Hệ thống nhà thông minh thế hệ mới nhất trên thế giới, công nghệ tiên tiến chuẩn châu âu - theo
    tiêu chí xếp hạng của Gartner')
@section('main')
    <img src="/images/banner.png" alt="">

    <div class="container mx-auto">
        <div class="py-10 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="self-end place-self-end">
                    <div class="flex flex-col items-stretch gap-3 max-w-md mx-auto p-6 border rounded-lg shadow-md bg-white">
                        <div class="mx-auto">
                            <img src="/images/1.png" alt="" class="w-[232px] h-[232px] object-cover">
                        </div>
                        <div>
                            <p class="text-base text-slate-500">
                                Tư vấn, thiết kế, thi công lắp đặt toàn diện giải pháp Smarthome - Neosmart với đội ngũ kỹ
                                sư
                                nhiều năm kinh nghiệm tự tin đồng hành cùng bạn mang đến trải nghiệm tuyệt vời cùng ngôi nhà
                                thông minh tiện nghi, sang trọng.
                            </p>
                        </div>
                        <div>
                            <a href="/">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="self-end place-self-start">
                    <div
                        class="flex flex-col items-stretch gap-3 max-w-md mx-auto p-6 border rounded-lg shadow-md bg-white">
                        <div class="mx-auto">
                            <img src="/images/2.png" alt="" class="w-[232px] h-[232px] object-cover">
                        </div>
                        <div>
                            <p class="text-base text-slate-500">
                                Tư vấn, thiết kế, thi công lắp đặt toàn diện giải pháp Smarthome - Neosmart với đội ngũ kỹ
                                sư
                                nhiều năm kinh nghiệm tự tin đồng hành cùng bạn mang đến trải nghiệm tuyệt vời cùng ngôi nhà
                                thông minh tiện nghi, sang trọng.
                            </p>
                        </div>
                        <div>
                            <a href="/">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="self-start place-self-end">
                    <div
                        class="flex flex-col items-stretch gap-3 max-w-md mx-auto p-6 border rounded-lg shadow-md bg-white">
                        <div class="mx-auto">
                            <img src="/images/3.png" alt="" class="w-[232px] h-[232px] object-cover">
                        </div>
                        <div>
                            <p class="text-base text-slate-500">
                                Tư vấn, thiết kế, thi công lắp đặt toàn diện giải pháp Smarthome - Neosmart với đội ngũ kỹ
                                sư
                                nhiều năm kinh nghiệm tự tin đồng hành cùng bạn mang đến trải nghiệm tuyệt vời cùng ngôi nhà
                                thông minh tiện nghi, sang trọng.
                            </p>
                        </div>
                        <div>
                            <a href="/">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="self-start place-self-start">
                    <div
                        class="flex flex-col items-stretch gap-3 max-w-md mx-auto p-6 border rounded-lg shadow-md bg-white">
                        <div class="mx-auto">
                            <img src="/images/4.png" alt="" class="w-[232px] h-[232px] object-cover">
                        </div>
                        <div>
                            <p class="text-base text-slate-500">
                                Tư vấn, thiết kế, thi công lắp đặt toàn diện giải pháp Smarthome - Neosmart với đội ngũ kỹ
                                sư
                                nhiều năm kinh nghiệm tự tin đồng hành cùng bạn mang đến trải nghiệm tuyệt vời cùng ngôi nhà
                                thông minh tiện nghi, sang trọng.
                            </p>
                        </div>
                        <div>
                            <a href="/">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-contact-box />

    <div class="relative">
        <img src="/images/banner-1.png" alt="" class="w-full  h-[412px] object-cover">
        <div class="absolute inset-0 container mx-auto grid place-items-center h-[412px]">
            <div class="px-6">
                <h2 class="text-white text-5xl font-bold">Thiết bị nhà thông minh</h2>
                <p class="text-white mt-3">
                    Bộ thiết bị an ninh NeoSmart Security gồm thiết bị an ninh trung tâm, hàng rào điện tử, các cảm biến, hệ
                    thống camera ghi hình… dựng nên hàng rào nhiều lớp, giám sát ngôi nhà theo thời gian thực. Khi phát hiện
                    chủ nhân quên đóng cửa nhà hoặc nguy cơ cháy nổ, xâm nhập trái phép,...
                </p>
            </div>
        </div>
    </div>

    <x-hot-product />
@endsection
