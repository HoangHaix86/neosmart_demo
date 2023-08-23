@extends('client.layout')
@section('pageTitle', 'Phụ kiện thông minh cho gia đình bạn')
@section('description',
    'Hệ thống nhà thông minh thế hệ mới nhất trên thế giới, công nghệ tiên tiến chuẩn châu âu - theo
    tiêu chí xếp hạng của Gartner')
@section('main')
    <section class="container mx-auto py-5 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 [&>*]:max-w-lg [&>*]:mx-auto">
            <div class="flex flex-col items-stretch gap-6">
                <div class="mx-auto">
                    <img src="/images/contact.png" alt="">
                </div>
                <div>
                    <h5 class="text-2xl">Address</h5>
                    <p class="flex items-center ">
                        <span class="w-6 h-6 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z"
                                    stroke-width="0" fill="currentColor"></path>
                            </svg>
                        </span>
                        <span class="text-base">30 Hoa Lan, Phường 02, Quận Phú Nhuận, Tp.HCM</span>
                    </p>
                </div>
                <div>
                    <h5 class="text-2xl">Phone</h5>
                    <p class="flex items-center">
                        <span class="w-6 h-6 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                </path>
                            </svg>
                        </span>
                        <a href="tel:0943 313 954">
                            <span class="text-base">0943 313 954</span>
                        </a>
                    </p>
                </div>
                <div>
                    <h5 class="text-2xl">Online Service</h5>
                    <p class="flex items-center">
                        <span class="w-6 h-6 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world-www"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M19.5 7a9 9 0 0 0 -7.5 -4a8.991 8.991 0 0 0 -7.484 4"></path>
                                <path d="M11.5 3a16.989 16.989 0 0 0 -1.826 4"></path>
                                <path d="M12.5 3a16.989 16.989 0 0 1 1.828 4"></path>
                                <path d="M19.5 17a9 9 0 0 1 -7.5 4a8.991 8.991 0 0 1 -7.484 -4"></path>
                                <path d="M11.5 21a16.989 16.989 0 0 1 -1.826 -4"></path>
                                <path d="M12.5 21a16.989 16.989 0 0 0 1.828 -4"></path>
                                <path d="M2 10l1 4l1.5 -4l1.5 4l1 -4"></path>
                                <path d="M17 10l1 4l1.5 -4l1.5 4l1 -4"></path>
                                <path d="M9.5 10l1 4l1.5 -4l1.5 4l1 -4"></path>
                            </svg>
                        </span>
                        <a href="https://www.neosmart.vn" target="_black">
                            <span class="text-base">www.neosmart.vn</span>
                        </a>
                    </p>
                    <p class="flex items-center">
                        <span class="w-6 h-6 mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                </path>
                                <path d="M3 7l9 6l9 -6"></path>
                            </svg>
                        </span>
                        <a href="matlto:info@neosmart.vn">
                            <span class="text-base">info@neosmart.vn</span>
                        </a>
                    </p>
                </div>
            </div>
            <div>
                <form class="flex flex-col items-stretch gap-4 shadow-md rounded-lg p-12">
                    <h2 class="text-2xl">Gửi tin nhắn cho chúng tôi</h2>
                    <div>
                        <label for="name">Tên</label>
                        <input id="name" name="name" type="text" placeholder="Họ tên" value="Hoàng Quốc Hải"
                            class="w-full rounded-md border p-2 text-base transition-shadow focus:shadow-[0px_0px_4px_2px_rgba(0,0,0,.35)] focus:shadow-primary-300 focus:outline-none" />
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="Email" value="hoanghai@dev.com"
                            class="w-full rounded-md border p-2 text-base transition-shadow focus:shadow-[0px_0px_4px_2px_rgba(0,0,0,.35)] focus:shadow-primary-300 focus:outline-none">
                    </div>
                    <div>
                        <label for="phone">Số điện thoại</label>
                        <input id="phone" name="phone" type="text" placeholder="Số điện thoại" value="0123456789"
                            class="w-full rounded-md border p-2 text-base transition-shadow focus:shadow-[0px_0px_4px_2px_rgba(0,0,0,.35)] focus:shadow-primary-300 focus:outline-none">
                    </div>
                    <div>
                        <label for="message">Tin nhắn</label>
                        <textarea name="message" id="message" cols="30" rows="10"
                            class="w-full rounded-md border p-2 text-base transition-shadow focus:shadow-[0px_0px_4px_2px_rgba(0,0,0,.35)] focus:shadow-primary-300 focus:outline-none">Nội dung</textarea>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-4">
        <iframe class="w-full aspect-video"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.9492498980282!2d106.69122662100355!3d10.796908791784002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cef71da905%3A0x319ddefa8be75e74!2zMzAgSG9hIExhbiwgUGjGsOG7nW5nIDcsIFBow7ogTmh14bqtbiwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1691048095208!5m2!1svi!2s"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <x-contact-box />
@endsection
