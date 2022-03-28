<?php

use Illuminate\Support\Facades\Route;

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
    return view('website.pages.index');
});
Route::get('/daily-games', function () {
    return view('website.pages.daily-games');
});
Route::get('/weekly-games', function () {
    return view('website.pages.daily-games');
});
Route::get('/bi-monthly-games', function () {
    return view('website.pages.daily-games');
});
Route::get('/monthly-games', function () {
    return view('website.pages.daily-games');
});

Route::get('/play-game', function () {
    return view('website.pages.play-game');
});
Route::get('/contact', function () {
    return view('website.pages.contact');
});
