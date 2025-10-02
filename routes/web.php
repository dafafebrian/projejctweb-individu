<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        "title" => "welcome"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "nama" => "Dafa Febrianto ",
        "nohp" => "08213697881",
        "foto" => "img/jokowi.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]); 
});

Route::get('/contact', function () {
    return view('kontak', [
        "title" => "Kontak"
    ]);
});

Route::get('/berita', function () {

    $data_berita = [
        [
            "judul" => "Berita 1",
            "penulis" => "Nadhif Basmalah",
            "konten" => "Bergema sampai selamanya"
        ],
        [
            "judul" => "Berita 2",
            "penulis" => ".Feast",
            "konten" => "Tarot"
        ],
        [
            "judul" => "Berita 3",
            "penulis" => "season",
            "konten" => "wave to earth"
        ]
        ];

    return view('berita', [

        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});