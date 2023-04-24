<div class="header" id="header">

    <div class="header__logo">
        <a href="{{ asset('/') }}">
            <img src="{{ asset('img/logo2.png') }}" alt="">
        </a>
    </div>

    <!-- hamburger menu -->
    <div id="hamburger">
        <div class="icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- hamburger menu list -->
    <nav class="sm" id="g-nav">
        <ul>
            <li>
                <a href="{{ route('index', '#about') }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('index', '#works') }}">
                    Works
                </a>
            </li>
            <li>
                <a href="{{ route('index', '#contact') }}">
                    Contact

                </a>
            </li>
        </ul>
    </nav>

    <!-- header list -->
    <nav class="header__menu pc gnavi">
        <ul class="header__menu-list">
            <li class="header__menu-text">
                <a class="" href="{{ route('index', '#about') }}">
                    About
                </a>
            </li>
            <li class="header__menu-text">
                <a class="" href="{{ route('index', '#works') }}">
                    Works
                </a>
            </li>
            <li class="header__menu-text">
                <a class="" href="{{ route('index', '#contact') }}">
                    Contact
                </a>
            </li>
        </ul>
    </nav>
</div>