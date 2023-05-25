@extends('site01.layouts.app')

@section('content')

<div class="hero">
    <img src="{{ asset('/img/site01/howto2.jpg') }}" alt="" class="howto_hero">
</div>

<div class="howto_text">
    <div class="section1 fadeUpTrigger">
        <div class="section1_pic">
            <img src="{{ asset('/img/site01/section1.jpeg') }}" alt="">
        </div>
        <div class="section1_discription">
            <p>教会はあなたに門を開いています。</p>
            <span></span>
            <p>私たちの教会は、カトリック名古屋教区に属しています。駅から近いですが静かな環境の教会です。教会の扉はいつも開かれています。毎週日曜日には、多くの信者が教会に集まり、ミサに参加して、神の教えを分かち合いながら新しくお見えになった方々とも親しく交流できるよう努めています。<br>初めて教会に足を運ぶのは、ほんの少し勇気がいるかもしれませんが、教会はいつもあなたを待っています。<br>気軽にとはゆかないでしょうが、そんなに堅苦しく考えなくても大丈夫です。信徒の皆さんも皆最初は初めてだったんですから。<br>教会に来たから「信者にならなくてはだめ」なんてことは無いので、安心してください。教会や、ミサの雰囲気、主イエス・キリストの教えに触れ、ご自身が「信仰の道を歩みたい」と思えた時に信仰すればよいのです。<br>信仰は人に強制されたり、組織の圧力のようなものでする物ではありません。あなたと神の直接の絆なのですから。<br>知りたいことは、神父におたずねください。</p>
        </div>
    </div>

    <div class="section2 fadeUpTrigger">
        <div class="section2_discription">
            <p>聖堂はいつも開いています。</p>
            <span></span>
            <p>ミサにいきなりは行きにくい…———<br>ミサの無い時でも、いつでも祈れるように聖堂の扉は開いています。<br>ミサにいきなりは少し抵抗があるようでしたら、聖堂の空気を感じてみてください。</p>    
        </div>
        <div class="section2_pic">
            <img src="{{ asset('/img/site01/section2.jpeg') }}" alt="">
        </div>
    </div>
    
    <div class="section3 fadeUpTrigger">
        <div class="section3_pic">
            <img src="{{ asset('/img/site01/section3.jpeg') }}" alt="">
        </div>
        <div class="section3_discription">
            <p>カトリックは意外に身近</p>
            <span></span>
            <p>あなたも知っている話がたくさんあります———<br>カトリック、いえキリスト教自体は余りご存じなくても、アダムとイブの話や、ノアの箱舟などはご存知ではないでしょうか？これらの話は聖書の中に記されています。他にもたくさん有名な話はあるのですが、すべてが父なる神と、私達の主/イエス・キリストが教会と聖書を通して語りかけてくれています。</p>
        </div>
    </div>
    
    <div class="section4 fadeUpTrigger">
        <div class="section4_discription">
        <span class="section4_title">主の祈り</span>
            <p class="section4_text">天におられるわたしたちの父よ、<br>み名が聖とされますように。<br>み国が来ますように。<br>みこころが天に行われるとおり地にも行われますように。<br>わたしたちの日ごとの糧を今日もお与えください。<br>わたしたちの罪をおゆるしください。<br>わたしたちも人をゆるします。<br>わたしたちを誘惑におちいらせず、<br>悪からお救いください。<br>（アーメン）</p>
        </div>
    </div>

    <div class="section5 fadeUpTrigger">
        <div class="section5_discription">
            <p>聖母マリア</p>
            <span></span>
            <p>あなたと共に祈って下さいます。———<br>聖霊によって乙女のまま、主イエス・キリストを身ごもった「聖マリア」<br>カトリックでは信仰の対象としてではなく、神の祝福を受け、主とともにいらっしゃる方として、崇敬しています。<br>私達と共に祈って下さいます。</p>
        </div>
        <div class="section5_pic">
            <img src="{{ asset('/img/site01/section5.jpeg') }}" alt="">
        </div>
    </div>
    
    <div class="section6 fadeUpTrigger">
        <div class="section6_discription">
        <span class="section6_title">アヴェ・マリアの祈り</span>
            <p class="section6_text">アヴェ、マリア、恵みに満ちた方、<br>主はあなたとともにおられます。<br>あなたは女のうちで祝福され、<br>ご胎内の御子イエスも祝福されています。<br>神の母聖マリア、わたしたち罪びとのために、<br>今も、死を迎える時も、お祈りください。<br>(アーメン)<br>み国が来ますように。<br>みこころが天に行われるとおり地にも行われますように。<br>わたしたちの日ごとの糧を今日も お与えください。<br>わたしたちの罪をおゆるしください。<br>わたしたちも人をゆるします。<br>わたしたちを誘惑におちいらせず、<br>（アーメン）</p>
        </div>
    </div>
    
    <div class="section7">
        <p>主の祝福が豊かにありますように。</p>
    </div>
</div>


@endsection