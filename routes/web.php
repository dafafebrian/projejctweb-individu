<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Febrian",
        "nohp" => "088888888888",
        "foto" => "img/jokowi.jpeg",
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});