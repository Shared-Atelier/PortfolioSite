<?php

namespace App\Http\Controllers\site03;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function showSite00()
    {
        return view('index');
    }
    public function showSite01()
    {
        return view('site01.index');
    }
    public function showSite02()
    {
        return view('site02.index');
    }
    public function showSite03()
    {
        return view('site03.index');
    }
    public function showSite04()
    {
        return view('site04.index');
    }
}
