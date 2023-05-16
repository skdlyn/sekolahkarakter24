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

Route::get('/tv_lengkap', function () {
    return view('tv_lengkap');
});

Route::get('/news_lengkap', function () {
    return view('news_lengkap');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/agenda_lengkap', function () {
    return view('agenda_lengkap');
});

Route::get('/formulir', function () {
    return view('formulir');
});

Route::get('/kurikulum', function () {
    return view('kurikulum');
});

Route::get('/debest', function () {
    return view('debest');
});


