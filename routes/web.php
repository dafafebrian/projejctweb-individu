<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/kontak', function () {
    return "Halaman Profile";
});

Route::get('/kontak', function () {
    return "Halaman Berita";
});

Route::get('/kontak', function () {
    return "Halaman Kontak";
});