<?php

namespace App\Http\Controllers\site04;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // hiragana

    public function showHiraganaTips()
    {
        return view('site04.hiragana.hiragana_tips');
    }
    public function showHiraganaLesson()
    {
        return view('site04.hiragana.hiragana_lesson');
    }
    public function showHiraganaTips1()
    {
        return view('site04.hiragana.contents.hiragana_tips1');
    }
    public function showHiraganaTips2()
    {
        return view('site04.hiragana.contents.hiragana_tips2');
    }
    public function showHiraganaTips3()
    {
        return view('site04.hiragana.contents.hiragana_tips3');
    }
    public function showHiraganaLessonContents()
    {
        return view('site04.hiragana.contents.hiragana_lesson_contents');
    }

    // katakana

    public function showKatakanaTips()
    {
        return view('site04.katakana.katakana_tips');
    }
    public function showKatakanaLesson()
    {
        return view('site04.katakana.katakana_lesson');
    }
    public function showKatakanaTips1()
    {
        return view('site04.katakana.contents.katakana_tips1');
    }
    public function showKatakanaTips2()
    {
        return view('site04.katakana.contents.katakana_tips2');
    }
    public function showKatakanaTips3()
    {
        return view('site04.katakana.contents.katakana_tips3');
    }
    public function showKatakanaLessonContents()
    {
        return view('site04.katakana.contents.katakana_lesson_contents');
    }

    // kanji

    public function showKanjiTips()
    {
        return view('site04.kanji.kanji_tips');
    }
    public function showKanjiLesson()
    {
        return view('site04.kanji.kanji_lesson');
    }
    public function showKanjiTips1()
    {
        return view('site04.kanji.contents.kanji_tips1');
    }
    public function showKanjiTips2()
    {
        return view('site04.kanji.contents.kanji_tips2');
    }
    public function showKanjiTips3()
    {
        return view('site04.kanji.contents.kanji_tips3');
    }
    public function showKanjiPoint1()
    {
        return view('site04.kanji.contents.kanji_point1');
    }
    public function showKanjiLessonContents()
    {
        return view('site04.kanji.contents.kanji_lesson_contents');
    }

    // stationery

    public function showPen()
    {
        return view('site04.stationery.pen');
    }
    public function showPaper()
    {
        return view('site04.stationery.paper');
    }
    public function showPosture()
    {
        return view('site04.stationery.posture');
    }

    // about

    public function showFirst()
    {
        return view('site04.about.first');
    }
    public function showContact()
    {
        return view('site04.about.contact04');
    }
}
