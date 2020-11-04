<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web.index');
});
Route::get('flight_list', function () {
    return view('web.flight');
});

Route::get('hotels', function () {
    return view('web.hotels');
});

Route::get('contact', function () {
    return view('web.contact');
});

Route::get('about', function () {
    return view('web.about');
});

Route::get('traveller', function () {
    return view('web.traveller');
});

Route::get('single-hotels', function () {
    return view('web.single-hotels');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
