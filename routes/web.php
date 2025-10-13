<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        "title" => "Welcome"
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
        "nama" => "Dafa Febrianto",
        "nohp" => "08213697881",
        "NIM" => "13242420033",
        "foto" => "img/jokowi.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
});

Route::get('/berita', function () {
    $data_berita = [
        [
            "judul" => "Berita satu",
            "slug" => "berita-satu",
            "penulis" => "Nadhif Basmalah",
            "konten" => "Bergema sampai selamanya"
        ],
        [
            "judul" => "Berita dua",
            "slug" => "berita-dua",
            "penulis" => ".Feast",
            "konten" => "Tarot"
        ],
        [
            "judul" => "Berita tiga",
            "slug" => "berita-tiga",
            "penulis" => "Season",
            "konten" => "Wave to Earth"
        ]
    ];

    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});

Route::get('/berita/{slug}', function ($slug) {
    $data_berita = [
        [
            "judul" => "Berita satu",
            "slug" => "berita-satu",
            "penulis" => "Nadhif Basmalah",
            "konten" => "Bergema sampai selamanya"
        ],
        [
            "judul" => "Berita dua",
            "slug" => "berita-dua",
            "penulis" => ".Feast",
            "konten" => "Tarot"
        ],
        [
            "judul" => "Berita tiga",
            "slug" => "berita-tiga",
            "penulis" => "Season",
            "konten" => "Wave to Earth"
        ]
    ];

    $new_berita = [];
    foreach ($data_berita as $berita) {
        if ($berita["slug"] === $slug) {
            $new_berita = $berita;
            break;
        }
    }

    return view('singleberita', [
        "title" => "Berita",
        "new_berita" => $new_berita,
    ]);
});
