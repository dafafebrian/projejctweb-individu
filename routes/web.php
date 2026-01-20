<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home', [
        "title" => "home"
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
        "nama" => "Dafa Febrian ",
        "nohp" => "088888888",
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

Route::get('/berita',[BeritaController::class, 'index']);

Route::get('/berita/{slug}', [BeritaController::class, 'tampildata']);


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'] )->name('tambahmahasiswa');
    Route::post('/insertdata', [MahasiswaController::class, 'insertdata'] )->name('insertdata');
    Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');
    Route::post('/editdata/{id}', [MahasiswaController::class, 'editdata'])->name('editdata');
    Route::get('/deletedata/{id}', [MahasiswaController::class, 'deletedata'])->name('deletedata');
});

