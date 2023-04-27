<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>PortfolioSite</title>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            {{-- favicon --}}
            <link rel="shortcut icon" href="{{ asset('/favicon.png') }}">
            <!-- Swiper.min.css -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
            <!--CSS -->
            <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            {{-- loading --}}
            <link rel="stylesheet" type='text/css' href="{{ asset('/css/loading.css') }}">
            {{-- menu button background --}}
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/menu_button_back.css') }}">
            {{-- scrollbar --}}
            <link rel="stylesheet" type="text/css" href="{{ asset('/css/scrollbar.css') }}">
        </head>

        <body>
            <div id="splash" class="splash">
                <div id="splash_text"></div>
            </div>

            <header>@include('commons.header')</header>
            
            <main>@yield('content')</main>

            <footer>@include('commons.footer')</footer>
            
            <!-- Swiper.min.js -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
            <!-- Scripts -->
            <script src="{{ asset('/js/app.js') }}"></script>
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <!-- hamburger -->
            <script>
                $('#hamburger').on('click', function() {
                    $('.icon').toggleClass('close');
                    $('.sm').slideToggle();
                });
            </script>
            {{-- loading --}}
            <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
            <script src="{{ asset('/js/loading.js') }}"></script>
        </body>
    </html>