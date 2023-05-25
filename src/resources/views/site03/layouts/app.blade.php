<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>PortfolioSite03</title>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            <!-- favicon -->
            <link rel="shortcut icon" href="{{ asset('/favicon03.png') }}">
            <!--CSS -->
            <link rel="stylesheet" href="{{ asset('/css/site03/app.css') }}" type="text/css">
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        </head>

        <body>

            <header>@include('site03.commons.header')</header>
            
            <main>@yield('content')</main>

            <footer>@include('site03.commons.footer')</footer>
            
            <!-- Scripts -->
            <script src="{{ asset('/js/site03/app.js') }}"></script>
        </body>
    </html>