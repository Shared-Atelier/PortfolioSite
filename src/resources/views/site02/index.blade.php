<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
                <title>PortfolioSite</title>
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
            {{-- favicon --}}
            <link rel="shortcut icon" href="{{ asset('/favicon02.png') }}">
            <!-- Swiper.min.css -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
            <!--CSS -->
            <link rel="stylesheet" href="{{ asset('/css/site02/app.css') }}" type="text/css">
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        </head>

        <body>
            <div id="splash" class="splash">
                <div id="splash_text"></div>
            </div>

        
            <div class="main_container">
                <div class="title">
                    <img src="{{ asset('/img/site02/site02_title.png') }}" alt="" class="title_pic">
                </div>

                <div class="content">
                    <div class="content__pic1">
                        <a href="{{ route('index00') }}" target="_blank"><img src="{{ asset('/img/site02/site00.png') }}" alt="">
                        <div class="mask">
                            <div class="caption">PORTFOLIO SITE</div>
                        </div></a>
                    </div>
                    <div class="content__pic2">
                        <a href="{{ route('index01') }}" target="_blank"><img src="{{ asset('/img/site02/site01.png') }}" alt="">
                        <div class="mask">
                            <div class="caption">CATHORIC NAKAHIRA CHURCH</div>
                        </div></a>
                    </div>
                    <div class="content__pic3">
                        <a href="{{ route('index02') }}" target="_blank"><img src="{{ asset('/img/site02/site02.png') }}" alt="">
                        <div class="mask">
                            <div class="caption">PORTFOLIO SITE</div>
                        </div></a>
                    </div>
                    <div class="content__pic4">
                        <a href="{{ route('index03') }}" target="_blank"><img src="{{ asset('/img/site02/site03.png') }}" alt="">
                        <div class="mask">
                            <div class="caption">PORTFOLIO SITE</div>
                        </div></a>
                    </div>
                </div>

                <div class="footer">
                    <div class="footer-text">
                        <p>
                        ©2023 SHARED-ATELIRE, All rights reserved.
                        </p>
                    </div>
                </div>
            </div>

            
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