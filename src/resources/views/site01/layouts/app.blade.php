<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>PortfolioSite01</title>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            <!-- favicon -->
            <link rel="shortcut icon" href="{{ asset('/favicon01.png') }}">
            <!--CSS -->
            <link rel="stylesheet" href="{{ asset('/css/site01/app.css') }}" type="text/css">
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        </head>

        <body>


            <header>@include('site01.commons.header')</header>
            
            <main>@yield('content')</main>

            <footer>@include('site01.commons.footer')</footer>
            
        </body>
    </html>