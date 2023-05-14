<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// IndexPage(Site00)

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact/contact', 'App\Http\Controllers\ContactController@showContact')->name('contact');


// Site01
Route::get('/site01', function () {
    return view('site01.index');
})->name('index01');

Route::get('/site01/index', 'App\Http\Controllers\site01\IndexController@showIndex')->name('index01');
Route::get('/site01/howto', 'App\Http\Controllers\site01\IndexController@showHowto')->name('howto');
Route::get('/site01/profile', 'App\Http\Controllers\site01\IndexController@showProfile')->name('profile');
Route::get('/site01/misa', 'App\Http\Controllers\site01\IndexController@showMisa')->name('misa');
Route::get('/site01/QnA', 'App\Http\Controllers\site01\IndexController@showQnA')->name('QnA');
Route::get('/site01/choir', 'App\Http\Controllers\site01\IndexController@showChoir')->name('choir');
Route::get('/site01/saishi', 'App\Http\Controllers\site01\IndexController@showSaishi')->name('saishi');

//Site02
Route::get('/site02', function () {
    return view('site02.index');
})->name('index02');

Route::get('/index', 'App\Http\Controllers\site02\IndexController@showSite00')->name('index00');
Route::get('/site01', 'App\Http\Controllers\site02\IndexController@showSite01')->name('index01');
Route::get('/site02', 'App\Http\Controllers\site02\IndexController@showSite02')->name('index02');
Route::get('/site03', 'App\Http\Controllers\site02\IndexController@showSite03')->name('index03');

//Site03
Route::get('/site03', function () {
    return view('site03.index');
})->name('index03');

Route::get('/index', 'App\Http\Controllers\site03\IndexController@showSite00')->name('index00');
Route::get('/site01', 'App\Http\Controllers\site03\IndexController@showSite01')->name('index01');
Route::get('/site02', 'App\Http\Controllers\site03\IndexController@showSite02')->name('index02');
Route::get('/site03', 'App\Http\Controllers\site03\IndexController@showSite03')->name('index03');

//Site04
Route::get('/site04', function () {
    return view('site04.index');
})->name('index04');

Route::get('/site04/hiragana_tips', 'App\Http\Controllers\site04\IndexController@showHiraganaTips')->name('hiragana_tips');
Route::get('/site04/hiragana_lesson', 'App\Http\Controllers\site04\IndexController@showHiraganaLesson')->name('hiragana_lesson');
Route::get('/site04/katakana_tips', 'App\Http\Controllers\site04\IndexController@showKatakanaTips')->name('katakana_tips');
Route::get('/site04/katakana_lesson', 'App\Http\Controllers\site04\IndexController@showKatakanaLesson')->name('katakana_lesson');
Route::get('/site04/kanji_tips', 'App\Http\Controllers\site04\IndexController@showKanjiTips')->name('kanji_tips');
Route::get('/site04/kanji_lesson', 'App\Http\Controllers\site04\IndexController@showKanjiLesson')->name('kanji_lesson');