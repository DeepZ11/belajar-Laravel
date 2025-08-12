<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    $data = [
        'nama' => 'John Doe',
        'umur' => 20,
        'alamat' => 'Jl. Contoh Alamat No. 123',
    ];
    return view('pages.about', $data);
});

Route::view('/contact', 'pages.contact');