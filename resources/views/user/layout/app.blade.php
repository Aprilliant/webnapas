<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">





    {{-- Fonts --}}
    {{--
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"> --}}
    {{-- swiper --}}
    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" /> --}}

    {{-- boxicon --}}
    {{--
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css') --}}
</head>

<body>


    <div class="">

        <main class="">

            @yield('content')

        </main>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/master.js"></script>


    {{--
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/master.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}>"></script> --}}
</body>

</html>