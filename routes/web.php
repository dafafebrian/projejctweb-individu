<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile'; [
        "nama" => "Livita Hadiningrat",
        "nohp" => "0876543234567",
        "foto" => "jokowi.jpg",
    ]);
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/kontak', function () {
    return view('kontak');
});
