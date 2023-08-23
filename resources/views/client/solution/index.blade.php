@extends('client.layout')
@section('pageTitle', 'Giải pháp')
@section('description', 'Giải pháp nhà thông minh')
@section('main')
    <img src="/images/nha-thong-minh-neosmart.jpg" alt="" class="aspect-video w-full object-cover max-h-[332px]">

    <div class="container mx-auto">
        <div class="px-6 py-12">
            <h2 class="text-4xl text-center block">Giải pháp</h2>
            <p class="text-base text-justify mt-6 text-slate-500">
                Công ty chúng tôi chuyên cung cấp các giải pháp đổi mới cho Smart IoT, giúp các doanh nghiệp và tổ chức trên
                nhiều
                lĩnh vực tối ưu hoá hoạt động, cải thiện hiệu quả và đẩy mạnh sự phát triển. Với công nghệ tiên tiến của
                chúng tôi,
                chúng tôi cho phép khách hàng của mình tận dụng sức mạnh của Internet of Things, giúp họ kết nối, giám sát
                và điều
                khiển thiết bị, tài sản và hệ thống từ bất kỳ đâu, bất cứ lúc nào. Các giải pháp của chúng tôi được thiết kế
                để linh
                hoạt, có khả năng mở rộng và bảo mật, phù hợp với các nhu cầu và yêu cầu độc đáo của từng khách hàng. Với
                giải pháp
                Smart IoT của chúng tôi, chúng tôi giúp các doanh nghiệp vượt qua thời đại chuyển đổi số và phát triển mạnh
                mẽ.
            </p>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="py-6 px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <img src="/images/neolocker_kiosk_banner.jpg" alt=""
                        class="object-cover aspect-video w-full rounded-md">
                </div>
                <div>
                    <img src="/images/neosmart_camera_security.png" alt=""
                        class="object-cover aspect-video w-full rounded-md">
                </div>
                <div>
                    <img src="/images/Neotech_Banner_Doorbell.png" alt=""
                        class="object-cover aspect-video w-full rounded-md">
                </div>
                <div>
                    <img src="/images/nha-thong-minh-neosmart.jpg" alt=""
                        class="object-cover aspect-video w-full rounded-md">
                </div>
            </div>
        </div>
    </div>

    <x-contact-box />
    <x-hot-product />
@endsection
