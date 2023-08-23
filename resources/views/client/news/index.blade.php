@extends('client.layout')
@section('pageTitle', 'Tin tức')
@section('description', 'Tin tức')
@section('main')
    <div class="xl:container mx-auto">
        <div class="p-4 flex flex-col md:flex-row items-stretch gap-6">
            <div class="flex flex-col items-stretch gap-4">
                <div class="flex flex-col gap-3 items-stretch my-4 p-6 rounded-md shadow">
                    <div>
                        <img src="/images/neosmart_doorbell_intercom.png" alt=""
                            class="aspect-video object-cover rounded-lg max-h-[332px] w-full">
                    </div>
                    <div>
                        <div>
                            <span class="text-sm text-slate-400">01-01-2023</span>
                        </div>
                        <div>
                            <a href="#">
                                <h2 class="text-xl line-clamp-2 text-slate-600">
                                    Giải pháp intercom video doorbell cho khách sạn, toà nhà, chung cư với neosmart
                                </h2>
                            </a>
                        </div>
                        <div>
                            <p class="line-clamp-3 text-gray-500">
                                Giải pháp video intercom nói chung có lẽ đã trở thành hệ thống quen thuộc tại các chung cư,
                                tòa nhà hay căn hộ cao cấp. Thời gian trước, hệ thống này có thể coi là khá “cao cấp”. Nhưng
                                với sự phát triển của nền công nghiệp như hiện nay, cùng nhu cầu tiêu dùng và sự cần thiết
                                của việc đảm bảo an toàn tự động, thì trang bị hê thống chuông cửa màn hình đã trở nên phổ
                                biến hơn.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-stretch my-4 p-6 rounded-md shadow">
                    <div>
                        <img src="/images/neolocker_kiosk_banner.jpg" alt=""
                            class="aspect-video object-cover rounded-lg max-h-[332px] w-full">
                    </div>
                    <div>
                        <div>
                            <span class="text-sm text-slate-400">01-01-2023</span>
                        </div>
                        <div>
                            <a href="#">
                                <h2 class="text-xl line-clamp-2 text-slate-600">
                                    neoLocker cung cấp dịch vụ cho thuê tủ locker thông minh qua APP trường học, spa, gym,
                                    chung cư
                                </h2>
                            </a>
                        </div>
                        <div>
                            <p class="line-clamp-3 text-gray-500">
                                Nếu bạn đang tìm kiếm một dịch vụ cho thuê tủ locker thông minh chất lượng, NeoLock là lựa
                                chọn tốt nhất cho bạn. Với hệ thống tủ locker thông minh được trang bị công nghệ hiện đại,
                                bảo mật cao và chất lượng tốt, NeoLock đáp ứng nhu cầu của các trường học, ký túc xá và các
                                tổ chức với giá cả hợp lý và dịch vụ chuyên nghiệp.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-stretch my-4 p-6 rounded-md shadow">
                    <div>
                        <img src="/images/tu_locker_qua_app.jpg" alt=""
                            class="aspect-video object-cover rounded-lg max-h-[332px] w-full">
                    </div>
                    <div>
                        <div>
                            <span class="text-sm text-slate-400">01-01-2023</span>
                        </div>
                        <div>
                            <a href="#">
                                <h2 class="text-xl line-clamp-2 text-slate-600">
                                    Giải pháp và Mô hình cho thuê tủ locker thông minh - Smart locker rental solutions
                                </h2>
                            </a>
                        </div>
                        <div>
                            <p class="line-clamp-3 text-gray-500">
                                Mô hình cho thuê tủ locker thông minh thông qua ứng dụng di động, người dùng có thể chọn
                                loại tủ locker, thời gian, thanh toán trực tuyến và người dùng có thể mở tủ thông qua mã
                                vạch, mã số, thẻ từ, vân tay, tablet trung tâm, qua APP giúp tối ưu sự tiện ích cho khách
                                hàng.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-stretch my-4 p-6 rounded-md shadow">
                    <div>
                        <img src="/images/smart_locker_neolock.jpg" alt=""
                            class="aspect-video object-cover rounded-lg max-h-[332px] w-full">
                    </div>
                    <div>
                        <div>
                            <span class="text-sm text-slate-400">01-01-2023</span>
                        </div>
                        <div>
                            <a href="#">
                                <h2 class="text-xl line-clamp-2 text-slate-600">
                                    Giải pháp giao nhận hàng hóa thông qua tủ locker thông minh neolock với các hệ thống
                                    thương mại điện tử
                                </h2>
                            </a>
                        </div>
                        <div>
                            <p class="line-clamp-3 text-gray-500">
                                Xu hướng mua hàng hóa trực tuyến trong bối cảnh dịch bệnh, giản cách xã hội phát triển mạnh
                                mẽ do dó dịch vụ giao nhận hàng hóa sẽ tiềm ẩn nhiều nguy cơ lây nhiễm bệnh khi tiếp xúc
                                giao hàng hóa, do đó Neolock cung cấp khóa tủ locker thông minh và API, SDK cho việc tích
                                hợp hê sinh thái ứng dụng của đối tác
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 border-l border-l-primary-400">
                <div class="border-b border-b-gray-400">
                    <h2 class="text-primary-500 text-lg">Nổi bật</h2>
                </div>
                <div class="flex flex-col gap-3 items-stretch my-4 p-1 rounded-md shadow">
                    <div>
                        <img src="/images/HTB1Go64aqigSKJjSsppq6ybnpXaC.jpg" alt=""
                            class="aspect-video object-cover rounded-lg">
                    </div>
                    <div>
                        <div>
                            <span class="text-sm text-slate-400">01-01-2023</span>
                        </div>
                        <div>
                            <a href="#">
                                <h2 class="text-lg line-clamp-2 text-slate-600">
                                    KHÓA ĐIỆN TỬ THÔNG MINH – GIẢI PHÁP CHO CUỘC SỐNG AN TOÀN VÀ TIỆN LỢI
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-3 items-stretch my-4 p-1 rounded-md shadow">
                    <div>
                        <img src="/images/neo5_ads.jpg" alt="" class="aspect-video object-cover rounded-lg">
                    </div>
                    <div>
                        <div>
                            <span class="text-sm text-slate-400">01-01-2023</span>
                        </div>
                        <div>
                            <a href="#">
                                <h2 class="text-lg line-clamp-2 text-slate-600">
                                    Lý do bạn nên chọn khoá cửa thông minh điều khiển từ xa
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-4">
        <ul class="flex items-center justify-center gap-4">
            <li>
                <a href="#">
                    <span class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M15 6l-6 6l6 6"></path>
                        </svg>
                    </span>
                </a>
            </li>
            <li>
                <a class="text-lg text-primary-500" href="#">1</a>
            </li>
            <li>
                <a class="text-lg" href="#">2</a>
            </li>
            <li>
                <a class="text-lg" href="#">3</a>
            </li>
            <li>
                <a href="#">
                    <span class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 6l6 6l-6 6"></path>
                        </svg>
                    </span>
                </a>
            </li>
        </ul>
    </div>
@endsection
