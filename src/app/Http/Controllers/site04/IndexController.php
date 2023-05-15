<?php

namespace App\Http\Controllers\site04;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showHiraganaTips()
    {
        return view('site04.hiragana.hiragana_tips');
    }
    public function showHiraganaLesson()
    {
        return view('site04.hiragana.hiragana_lesson');
    }
    public function showKatakanaTips()
    {
        return view('site04.katakana.katakana_tips');
    }
    public function showKatakanaLesson()
    {
        return view('site04.katakana.katakana_lesson');
    }
    public function showKanjiTips()
    {
        return view('site04.kanji.kanji_tips');
    }
    public function showKanjiLesson()
    {
        return view('site04.kanji.kanji_lesson');
    }
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
    public function showFirst()
    {
        return view('site04.about.first');
    }
    public function showContact()
    {
        return view('site04.about.contact');
    }
}
