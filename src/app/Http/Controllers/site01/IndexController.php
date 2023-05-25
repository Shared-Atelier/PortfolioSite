<?php

namespace App\Http\Controllers\site01;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showIndex()
    {
        return view('site01.index');
    }

    public function showHowto()
    {
        return view('site01.howto');
    }

    public function showProfile()
    {
        return view('site01.profile');
    }

    public function showMisa()
    {
        return view('site01.misa');
    }

    public function showQnA()
    {
        return view('site01.QnA');
    }

    public function showChoir()
    {
        return view('site01.choir');
    }

    public function showSaishi()
    {
        return view('site01.saishi');
    }
}
