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

//IndexPage

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact/contact', 'App\Http\Controllers\ContactController@showContact')->name('contact');


//Site01

Route::get('/site01', function () {
    return view('/site01/index');
})->name('index01');