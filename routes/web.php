<?php

Route::get('/', function () {
    return view('main.home');
});

Route::get('tentang', function () {
    return view('main.tentang');
});

Route::get('diagnosis/{Q}', function() {
    return view('analisa.analisa-mesin');
});

Route::get('hasil/{Q}', function() {
    return view('analisa.hasil-kerusakan');
});
