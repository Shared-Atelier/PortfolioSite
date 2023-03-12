<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>PortfolioSite</title>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            <!--CSS -->
            <link rel="stylesheet" href="{{ asset('/css/app.css') }}" type="text/css">
        </head>
        <body>
            @include('commons.header')
            @yield('content')
            @include('commons.footer')
            <!-- JQuery -->
            <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="js/tether.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <!-- MDB core  JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
        </body>
    </html>