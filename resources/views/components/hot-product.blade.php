<section class="container mx-auto py-5 px-4">
    <h2 class="my-3 text-3xl border-b-2 border-b-red-500">Sản phẩm hot</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @for ($i = 0; $i < 6; $i++)
            <div>
                <div class="flex flex-col items-stretch gap-4 p-6 shadow-lg rounded-xl max-w-md mx-auto">
                    <div>
                        <a href="/">
                            <img src="/images/neo5_ads.jpg" alt="khoa"
                                class="hover:scale-110 transition-all object-cover aspect-square">
                        </a>
                    </div>
                    <div>
                        <a href="/">
                            <h3>Khoá điện tử điều khiển qua APP cửa kính, khoá xe máy chữ U vân tay POKU3</h3>
                        </a>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-primary-500 text-lg">Giá 100.000.000</p>
                        <button type="button"
                            class="bg-primary-500 hover:bg-primary-600 transition-all text-white px-3 py-2 rounded-lg">Mua
                            ngay</button>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</section>
