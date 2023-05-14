<div class="header" id="header">

    <nav>

        <!-- logo -->
        <div class="logo">
            <a href="{{ route('index04') }}">
                <img src="{{ asset('img/site04/logo.png') }}" alt="" class="logo_pic">
            </a>
        </div>

        <!-- header list pc-->
        <div class="pc">
            <ul>
                <li><a href="{{ route('index04') }}">トップ</a></li>
                <li class="has-child"><a href="#">練習帳</a>
                    <ul>
                        <li class="has-child"><a href="#">ひらがな</a>
                            <ul>
                                <li><a href="{{ route('hiragana_tips') }}">ひらがなを美しく書く3つのコツ</a></li>
                                <li><a href="{{ route('hiragana_lesson') }}">ひらがな別 美しく書くコツ</a></li>
                            </ul>
                        </li>
                        <li class="has-child"><a href="#">カタカナ</a>
                            <ul>
                                <li><a href="{{ route('katakana_tips') }}">カタカナを美しく書く3つのコツ</a></li>
                                <li><a href="{{ route('katakana_lesson') }}">カタカナ別 美しく書くコツ</a></li>
                            </ul>
                        </li>
                        <li class="has-child"><a href="#">漢字</a>
                            <ul>
                                <li><a href="{{ route('kanji_tips') }}">漢字を美しく書く3つのコツ</a></li>
                                <li><a href="{{ route('kanji_lesson') }}">部首/部分別 美しく書くコツ</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-child"><a href="#">筆記具の基礎知識</a>
                    <ul>
                        <li><a href="#">ペンの種類と特徴</a></li>
                        <li><a href="#">紙と下敷き</a></li>
                        <li><a href="#">ペンの持ち方と姿勢</a></li>
                    </ul>
                </li>
                <li class="has-child"><a href="#">このサイトについて</a>
                    <ul>
                        <li><a href="#">はじめに</a></li>
                        <li><a href="#">本サイトについて</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</div>