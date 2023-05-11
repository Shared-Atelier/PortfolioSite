<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>PortfolioSite04</title>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            <!--CSS -->
            <link rel="stylesheet" href="{{ asset('/css/site04/app.css') }}" type="text/css">
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <!-- loading -->
            <link rel="stylesheet" href="{{ asset('/css/site04/loading.css') }}" type="text/css">
        </head>

        <body>
        
        <!-- loading -->
        <div id="splash">
        <div id="splash_logo"><img src="img/site04/loading.png" alt="" class="fadeUp"></div><!--画像部分は適宜差し換えてください-->
        <!--/splash--></div>


            <header>@include('site04.commons.header')</header>
            
            <main>@yield('content')</main>

            <footer>@include('site04.commons.footer')</footer>
            
            

            <!-- Scripts -->
            <script src="{{ asset('/js/site04/app.js') }}"></script>
            <!-- loading scripts -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
            <script src="{{ asset('/js/site04/loading.js') }}"></script>
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        </body>
    </html>