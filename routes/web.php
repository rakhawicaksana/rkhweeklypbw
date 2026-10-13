<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile',[
        "title" => "Profile",
        "name" => "wayan rakha",
        "nim" => "13242520048",
        "prodi" => "teknologi informasi",
        "gambar" => "rakha2.jpg",

    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "Contact",
    ]);
});


Route::get('/berita', function () {



    return view('berita',[
        "title" => "Berita",
        "beritas" => Berita::ambilberita(),
    ]);
});

Route::get('/berita/{slug}', function ($slug){




return view ('beritatunggal',[
    "title" => Berita::getTitle($slug),
    "berita" => Berita::getBerita($slug),
    ]);
});


Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
    ]);
});