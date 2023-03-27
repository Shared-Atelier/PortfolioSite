<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>PortfolioSite</title>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            <!-- Swiper.min.css -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
            <!--CSS -->
            <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        </head>
        <body>
            @include('commons.header')
            @yield('content')
            @include('commons.footer')
            <!-- Swiper.min.js -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}"></script>
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <!-- hamburger -->
            <script>
                $('#hamburger').on('click', function() {
                    $('.icon').toggleClass('close');
                    $('.sm').slideToggle();
                });
            </script>
        </body>
    </html>