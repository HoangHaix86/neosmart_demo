@extends('client.layout')
@section('pageTitle', 'Sản phẩm')
@section('description', 'Sản phẩm nhà thông minh')
@section('main')
    {{-- <img src="/images/banner.png" alt=""> --}}

    <div class="container mx-auto py-4 px-4 bg-white rounded-lg">
        <div class="grid grid-cols-12">
            <div class="col-span-4 px-4">
                <div class="w-full mx-auto">
                    <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover">
                </div>
                <div class="mt-3">
                    <div class="flex overflow-hidden gap-1">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                        <img src="https://picsum.photos/640" alt="" class="aspect-square object-cover w-[64px]">
                    </div>
                </div>
            </div>

            <div class="col-span-8 pl-4">
                <h2 class="text-3xl text-neutral-800">
                    Apple iPhone 14 Pro Max
                </h2>
                <div>
                    <p class="text-4xl text-primary-500 bg-gray-100 rounded-lg py-4 pl-2 my-3">100.000.000</p>
                </div>
                <div>
                    <p class="text-base">Số lượng</p>
                    <div class="mt-2">
                        <div class="flex">
                            <span id="dec" class="w-8 h-8 p-1 cursor-pointer border">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 6l-6 6l6 6"></path>
                                </svg>
                            </span>
                            <input id="qty" type="text" class="h-8 border p-1 text-center focus:outline-none w-10"
                                value="1">
                            <span id="inc" class="w-8 h-8 p-1 cursor-pointer border">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="button"
                        class="px-6 py-2 bg-primary-500 hover:bg-primary-400 rounded-lg text-base text-white">
                        Chọn Mua
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quos possimus corporis! Unde, facilis.
                Temporibus eos iste reprehenderit ab accusantium molestiae, repellat quidem, officiis, nisi sit eligendi
                aperiam ullam aliquam quaerat. Quaerat aut doloremque maiores fugiat cum aliquam accusantium quis, libero a
                officiis voluptate earum vero! Aperiam, pariatur nam. Ad neque itaque fugit tempora dicta quisquam maiores
                odio minima magnam rem. Amet quibusdam animi nemo porro accusantium magni libero doloribus molestias quam
                sapiente molestiae, voluptatem vel suscipit unde? Aliquid dolore fugit modi incidunt excepturi est omnis non
                quia doloremque nam, earum consequatur provident beatae unde quidem ipsum enim vitae at.</p>
        </div>
    </div>

    <script>
        const dec = document.getElementById('dec');
        const inc = document.getElementById('inc');
        const qty = document.getElementById('qty');

        qty.onchange = (event) => {
            const value = parseInt(qty.value)
            if (value) {
                if (value >= 1 && value <= 100) {
                    // 
                } else {
                    qty.classList.remove('border-red-500')

                }
                inc.classList.remove('pointer-events-none')
                dec.classList.remove('pointer-events-none')
            } else {
                qty.classList.add('border-red-500')

                inc.classList.add('pointer-events-none')
                dec.classList.add('pointer-events-none')
            }
        }

        dec.onclick = (event) => {
            let _value = parseInt(qty.value)
            _value -= 1
            if (_value >= 1) {
                qty.value = _value
                inc.classList.remove('pointer-events-none')
                qty.classList.remove('border-red-500')
            } else {
                qty.value = 1
                dec.classList.add('pointer-events-none')
            }
        }

        inc.onclick = (event) => {
            let _value = parseInt(qty.value)
            _value += 1
            if (_value >= 1 && _value <= 100) {
                qty.value = _value
                dec.classList.remove('pointer-events-none')
                qty.classList.remove('border-red-500')
            } else {
                qty.value = 100
                inc.classList.add('pointer-events-none')
            }
        }
    </script>

    <div class="fixed top-0 right-0 z-[11111] bg-amber-400">
        <span class="width"></span>
        <span class="height"></span>
    </div>
    <script>
        const width = document.querySelector('.width');
        const height = document.querySelector('.height');
        window.addEventListener('resize', function() {
            width.innerHTML = window.innerWidth;
            height.innerHTML = window.innerHeight;
        })
    </script>
    <x-contact-box />
@endsection
