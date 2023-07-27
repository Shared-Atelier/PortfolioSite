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

// Route::get('/contact/contact', 'App\Http\Controllers\ContactController@showContact')->name('contact');

// Mail
// 入力ページ
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
// 確認ページ
Route::post('/contact/confirm', 'App\Http\Controllers\ContactController@confirm')->name('contact.confirm');
// 送信完了ページ
Route::post('/contact/thanks', 'App\Http\Controllers\ContactController@send')->name('contact.send');


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
Route::get('/site04', 'App\Http\Controllers\site02\IndexController@showSite04')->name('index04');

//Site03
Route::get('/site03', function () {
    return view('site03.index');
})->name('index03');

Route::get('/index', 'App\Http\Controllers\site03\IndexController@showSite00')->name('index00');
Route::get('/site01', 'App\Http\Controllers\site03\IndexController@showSite01')->name('index01');
Route::get('/site02', 'App\Http\Controllers\site03\IndexController@showSite02')->name('index02');
Route::get('/site03', 'App\Http\Controllers\site03\IndexController@showSite03')->name('index03');
Route::get('/site04', 'App\Http\Controllers\site03\IndexController@showSite04')->name('index04');

//Site04
Route::get('/site04', function () {
    return view('site04.index');
})->name('index04');

Route::get('/site04/hiragana_tips', 'App\Http\Controllers\site04\IndexController@showHiraganaTips')->name('hiragana_tips');
Route::get('/site04/hiragana_lesson', 'App\Http\Controllers\site04\IndexController@showHiraganaLesson')->name('hiragana_lesson');
Route::get('/site04/hiragana_tips1', 'App\Http\Controllers\site04\IndexController@showHiraganaTips1')->name('hiragana_tips1');
Route::get('/site04/hiragana_tips2', 'App\Http\Controllers\site04\IndexController@showHiraganaTips2')->name('hiragana_tips2');
Route::get('/site04/hiragana_tips3', 'App\Http\Controllers\site04\IndexController@showHiraganaTips3')->name('hiragana_tips3');
Route::get('/site04/hiragana_lesson_contents', 'App\Http\Controllers\site04\IndexController@showHiraganaLessonContents')->name('hiragana_lesson_contents');

Route::get('/site04/katakana_tips', 'App\Http\Controllers\site04\IndexController@showKatakanaTips')->name('katakana_tips');
Route::get('/site04/katakana_lesson', 'App\Http\Controllers\site04\IndexController@showKatakanaLesson')->name('katakana_lesson');
Route::get('/site04/katakana_tips1', 'App\Http\Controllers\site04\IndexController@showKatakanaTips1')->name('katakana_tips1');
Route::get('/site04/katakana_tips2', 'App\Http\Controllers\site04\IndexController@showKatakanaTips2')->name('katakana_tips2');
Route::get('/site04/katakana_tips3', 'App\Http\Controllers\site04\IndexController@showKatakanaTips3')->name('katakana_tips3');
Route::get('/site04/katakana_lesson_contents', 'App\Http\Controllers\site04\IndexController@showKatakanaLessonContents')->name('katakana_lesson_contents');

Route::get('/site04/kanji_tips', 'App\Http\Controllers\site04\IndexController@showKanjiTips')->name('kanji_tips');
Route::get('/site04/kanji_lesson', 'App\Http\Controllers\site04\IndexController@showKanjiLesson')->name('kanji_lesson');
Route::get('/site04/kanji_tips1', 'App\Http\Controllers\site04\IndexController@showKanjiTips1')->name('kanji_tips1');
Route::get('/site04/kanji_tips2', 'App\Http\Controllers\site04\IndexController@showKanjiTips2')->name('kanji_tips2');
Route::get('/site04/kanji_tips3', 'App\Http\Controllers\site04\IndexController@showKanjiTips3')->name('kanji_tips3');
Route::get('/site04/kanji_point1', 'App\Http\Controllers\site04\IndexController@showKanjiPoint1')->name('kanji_point1');
Route::get('/site04/kanji_lesson_contents', 'App\Http\Controllers\site04\IndexController@showKanjiLessonContents')->name('kanji_lesson_contents');

Route::get('/site04/pen', 'App\Http\Controllers\site04\IndexController@showPen')->name('pen');
Route::get('/site04/paper', 'App\Http\Controllers\site04\IndexController@showPaper')->name('paper');
Route::get('/site04/posture', 'App\Http\Controllers\site04\IndexController@showPosture')->name('posture');

Route::get('/site04/first', 'App\Http\Controllers\site04\IndexController@showFirst')->name('first');
Route::get('/site04/contact04', 'App\Http\Controllers\site04\IndexController@showContact')->name('contact04');


// Site05
Route::get('/site05', function () {
    return view('site05.index');
})->name('index05');