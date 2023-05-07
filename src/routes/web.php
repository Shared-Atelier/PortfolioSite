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