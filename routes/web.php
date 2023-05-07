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

Route::get('/', function () {
    return view('landing');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/tv', function () {
    return view('tv');
});

Route::get('/news_lengkap', function () {
    return view('news_lengkap');
});

Route::get('/nyoba', function () {
    return view('nyoba');
});