@extends('site01.layouts.app')

@section('content')

<div class="hero">
    <img src="{{ asset('/img/site01/stendglass2.jpeg') }}" alt="" class="qna_hero">
</div>

<div class="headline">
    <h1>Q&A</h1>
    <p>カトリック教会に初めて訪れてみようとされる方が感じられる不安や疑問点、よく寄せられるご質問について、簡単にご説明いたします。<br>ここに書かれていないことでご質問なさりたい点や、さらに詳しくお聞きになりたいことがありましたら、「お問い合わせ」ページにある連絡先まで、お気軽にご質問をお寄せください。</p>
</div>

<div class="qna_text">
    <h2>教会ご訪問に関して</h2>
    <div qna_text>
        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>お休みの日はありますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>教会の聖堂は一年中毎日開いています。神父が不在のときも、担当の係が扉の開け閉めをしています。聖堂に入れる時間は、朝7時から夕方6時までです。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>拝観料のようなものは必要ですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>必要ありません。教会施設に入るための料金は一切いただいていません。また当教会では、常設の献金箱も置いていません。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>駐車場はありますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>あります。敷地内に、一般車約8台と障がい者用車両2台が置けます。ただし日曜日のミサ時などはいつも満車になりますので、近隣の有料駐車場もご利用ください。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>私のような信仰心をもたない者が、教会の中に入ってもいいのですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>もちろん歓迎いたします。教会は、信者だけに限られた場所ではありません。また、教会を訪れたら神を信じなくてはいけないという約束もありません。お気軽にお入りください。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>私には神様の前に立つ資格などない気がしますが、受け入れてもらえますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>はい。教会とは、むしろ、生きる上での救いや支えを必要としている方、ご自身のことが小さく無意味なものに感じられているような方にこそ、来ていただきたいところなのです。どうぞいちど足を運んでみてください。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>私には神様の前に立つ資格などない気がしますが、受け入れてもらえますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>はい。教会とは、むしろ、生きる上での救いや支えを必要としている方、ご自身のことが小さく無意味なものに感じられているような方にこそ、来ていただきたいところなのです。どうぞいちど足を運んでみてください。</p>    
            </div>
        </div>
        <span></span>
        

        
        <br>
        <h2>ミサについて</h2>
        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>ミサでは、何をしているのですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>聖歌を歌い、聖書の朗読を聴き、司祭の説教を味わい、みなで共に祈ります。そして、キリストによる最後の晩餐を記念する「聖体拝領」が行われます。カトリックのミサは、キリストのもとに集まった人々が、神への感謝とともにその恵みにあずかる場です。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>ミサを見学したいのですが、予約は必要ですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>予約は必要ありません。なお、あらかじめご連絡いただければ、ミサご見学の際にご案内や説明をさせていただく手配もいたします。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>キリスト教の信者ではありませんが、ミサに参加できますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>はい。ミサには、他の宗教の信者の方を含めて、どなたでもご自由に参加していただけます。「聖体拝領」はカトリックの洗礼を受けた方に限られますが、信者でない方も、司祭からの祝福を受けることができます。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>ミサにはどんな服装で参加したらいいですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>改まった服装は必要ありません。大勢の人が集まる場にふさわしい常識的なものであれば、普段着でもけっこうです。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>ミサに参加するのに何か持ち物は必要ですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>何も持たずにお越しになっても大丈夫です。聖歌の本や必要な資料は聖堂内に用意してあります。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>小さい子どもを連れて行ってもかまいませんか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>大丈夫です。お子様をお預かりするようなお手伝いはできませんが、聖堂内に一緒に入っていただいてけっこうです。小さなお子たちの姿がほほえましいという声もありました。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>初めてなのですが、どうすればいいでしょうか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>日曜日のミサでは聖堂入口に受付係がいますので、初めてです、とおっしゃってください。ご案内をいたします。聖堂の中では、どうぞあいている席にご自由にお座りください。<br>ミサの中で歌う聖歌や朗読聖書の言葉、ミサの次第については、会衆席手前の棚にある「典礼聖歌」等の本と、テーブル上の「聖書と典礼」・「祈りの手帖」などでご覧いただけます。<br>ご不明なことは何でも案内の係にご遠慮なくお尋ねください。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>ミサに参加したら献金をしなくてはいけませんか？ほんの少しでもいいですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>ミサの中で献金籠（かご）が会衆席に回されますが、献金は義務ではなく、神への捧げものとして、自由なこころざしのもとに行われます。入れるかどうかも、金額も、自由です。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>ミサに参加すると、入信をしつこく勧められないか不安ですが？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>まったくご心配には及びません。信仰を強制してはならないというのが、現代のカトリック教会の原則です。ご自身で望んでおられない方にまで入信を勧めることはありません。</p>    
            </div>
        </div>
        <span></span>

        <br>
        <h2>その他、教会の活動に関して</h2>
        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>教会には、私と同じくらいの若い人たちもいますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>年配の方々から子どもまで、幅広い年齢の人たちが集まっています。若い人たちも多く、「子どもの集い」や、中学生・青年のグループ活動も盛んです。また外国出身の方もおられ国際色豊かです。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>聖書について教えてもらうことはできますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>「カトリック入門講座」・「聖書の集い」で、聖書の所々を取り上げて説明されます。また、旧約聖書を通読する「聖書百週」という会も開かれています。詳しいことは教会へお問い合わせください。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>神父様と話したいのですが？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>事前にお電話でご連絡いただければ、ゆっくり時間をとってお話ができます。ミサにいらっしゃれば、終わったあと立ち話程度はできますが、何かと予定もあり長い時間は難しいので、前もってお電話でのご予約をお勧めいたします。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>結婚式を教会で挙げたいのですが、受け付けてもらえますか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>当教会の聖堂で挙式ができます。ただし、カトリック教会としてのいろいろな制限や条件があります。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>洗礼はだれでも受けられるのですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>はい、何も制限はありません。ただ、洗礼は「秘跡」（神の恵みにあずかる特別の機会）の一つであり、それを受ける人にとって、新しく生まれ変わるのと同じほどの重い意味をもっています。このため、通常は講座などで信仰について学んでから受けることになります。</p>    
            </div>
        </div>
        <span></span>

        <div class="q">
            <div class="q_img">
                <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            </div>
            <div class="q_text">
                <p>いつかカトリックの洗礼を受けたいと思いますが、どうしたらいいですか？</p>
            </div>
        </div>
        <div class="a">
            <div class="a_img">
                <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            </div>
            <div class="a_text">
                <p>まずは主任司祭（神父）にご意向をお話しください。まだ現実的なこととしてまではお考えでなくても、「カトリック入門講座」に出て、信者としての生き方がどのようなものかを知っていただくのもよいと思います。</p>    
            </div>
        </div>
        <span></span>


    </div>
</div>
@endsection