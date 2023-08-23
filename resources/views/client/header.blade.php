<header class="fixed top-0 left-0 right-0 z-[2023]">
    <div class="h-[64px] bg-white shadow-lg">
        <div class="container mx-auto p-4">
            <div class="flex items-center justify-between">
                <a href="/" title="NeoSmart">
                    <img src="/images/logo.png" alt="logo" class="h-[32px]">
                </a>
                <span id="btnMenuBar" class="w-8 h-w-8 p-1 rounded-full inline-block cursor-pointer md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M4 6l16 0"></path>
                        <path d="M4 12l16 0"></path>
                        <path d="M4 18l16 0"></path>
                    </svg>
                </span>

                {{-- <div id="menuBar"
                    class="absolute top-full bg-white left-0 right-0 border overflow-hidden max-h-0 transition-all">
                    <ul class="flex flex-col items-center gap-4 p-4">
                        <li><a class="whitespace-nowrap" href="/">Trang chủ</a></li>
                        <li><a class="whitespace-nowrap" href="/san-pham">Sản phẩm</a></li>
                        <li><a class="whitespace-nowrap" href="/giai-phap">Giải pháp</a></li>
                        <li><a class="whitespace-nowrap" href="/tin-tuc">Tin tức</a></li>
                        <li><a class="whitespace-nowrap" href="/blog">Blog</a></li>
                        <li><a class="whitespace-nowrap" href="/lien-he">Liên hệ</a></li>
                    </ul>
                </div> --}}
                <div id="menuBar"
                    class="absolute top-full left-0 right-0 bg-white overflow-hidden invisible md:visible max-h-0 transition-[max-height] md:overflow-visible md:static md:max-h-full">
                    <ul class="flex flex-col items-center gap-4 lg:gap-[64px] md:flex-row">
                        <li><a class="whitespace-nowrap" href="/">Trang chủ</a></li>
                        <li><a class="whitespace-nowrap" href="/san-pham">Sản phẩm</a></li>
                        <li><a class="whitespace-nowrap" href="/giai-phap">Giải pháp</a></li>
                        <li><a class="whitespace-nowrap" href="/tin-tuc">Tin tức</a></li>
                        <li><a class="whitespace-nowrap" href="/blog">Blog</a></li>
                        <li><a class="whitespace-nowrap" href="/lien-he">Liên hệ</a></li>
                    </ul>
                </div>

                {{-- <ul class="md:flex items-center md:gap-4 lg:gap-[64px] hidden">
                    <li><a class="whitespace-nowrap" href="/">Trang chủ</a></li>
                    <li><a class="whitespace-nowrap" href="/san-pham">Sản phẩm</a></li>
                    <li><a class="whitespace-nowrap" href="/giai-phap">Giải pháp</a></li>
                    <li><a class="whitespace-nowrap" href="/tin-tuc">Tin tức</a></li>
                    <li><a class="whitespace-nowrap" href="/blog">Blog</a></li>
                    <li><a class="whitespace-nowrap" href="/lien-he">Liên hệ</a></li>
                </ul> --}}
            </div>
        </div>
    </div>
</header>
