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
}
