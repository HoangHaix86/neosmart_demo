<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhà thông minh SmartHome - NeoSmart - @yield('pageTitle')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="Neosmart">
    <meta name="google-site-verification" content="ggARxFaQ0cT5UQKWigeYWEk-q0k5Guf1czrgCBjv2bs" />

    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/owl-carousel-2@0.0.3/owl.carousel.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/owl-carousel-2@0.0.3/assets/owl.carousel.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/client.js'])
</head>

<body>
    @include('client.header')
    <main class="pt-16">
        @yield('main')
    </main>
    @include('client.footer')
</body>

</html>
