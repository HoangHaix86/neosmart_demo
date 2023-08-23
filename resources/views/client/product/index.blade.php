@extends('client.layout')
@section('pageTitle', 'Sản phẩm')
@section('description', 'Sản phẩm nhà thông minh')
@section('main')
    <img src="/images/banner.png" alt="">

    <section class="container mx-auto py-5 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($allProduct as $value)
                <div>
                    <div class="flex flex-col items-stretch gap-4 p-6 shadow-lg rounded-xl max-w-md mx-auto">
                        <div class="aspect-square">
                            <a href="/">
                                <img src="/images/neo5_ads.jpg" alt="khoa"
                                    class="hover:scale-110 transition-all object-cover aspect-square">
                            </a>
                        </div>
                        <div>
                            <a href="/">
                                <h3 class="line-clamp-2 text-lg">{{ $value->name }}</h3>
                            </a>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-primary-500 text-lg">Giá {{ number_format($value->price, 0, ',', '.') }}</p>
                            <button type="button"
                                class="bg-primary-500 hover:bg-primary-600 transition-all text-white px-3 py-2 rounded-lg">Mua
                                ngay</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="container mx-auto py-4">
        <ul class="flex items-center justify-center gap-4">
            <li>
                <a href="/san-pham?page=1">
                    <span class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevrons-left"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 7l-5 5l5 5"></path>
                            <path d="M17 7l-5 5l5 5"></path>
                        </svg>
                    </span>
                </a>
            </li>
            {{-- <li>
                <a class="text-lg text-primary-500" href="#">1</a>
            </li> --}}
            @for ($i = 1; $i <= $allProduct->onEachSide; $i++)
                <li>
                    <a class="text-lg{{ $i === $allProduct->currentPage() ? ' text-primary-500' : '' }}"
                        href="{{ '/san-pham?page=' . $i }}">{{ $i }}</a>
                </li>
            @endfor
            <li>
                <a href="/san-pham?page={{ $allProduct->onEachSide }}">
                    <span class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevrons-right"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 7l5 5l-5 5"></path>
                            <path d="M13 7l5 5l-5 5"></path>
                        </svg>
                    </span>
                </a>
            </li>
        </ul>
    </div>

    <x-contact-box />
@endsection
