<?php

use Illuminate\Support\Facades\Route;

Route::get('/numeri', function () {
    $numbers = [];

    for ($i=0; $i < 100 ; $i++) {
      $numbers[] = $i;
    }

    return view('layouts.numeri', compact('numbers'));
});

Route::get('/', function () {

    return view('layouts.home');
});

Route::get('/nomi', function () {

    return view('layouts.nomi');
});
