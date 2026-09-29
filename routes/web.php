<?php

use Illuminate\Support\Facades\Route;

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
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
    ]);
});