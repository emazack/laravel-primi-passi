<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/numeri', function () {
    $numbers = [];

    for ($i=0; $i < 100 ; $i++) {
      $numbers[] = $i;
    }

    return view('numeri', compact('numbers'));
});

Route::get('/', function () {

    return view('welcome');
});

Route::get('/nomi', function () {

    return view('nomi');
});
