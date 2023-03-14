<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Home', ['temp' => 1]);
});

Route::get('/Home/{temp}', function($temp){   
    return view('Home', ['temp' => $temp]);
});

Route::get('/vika', function () {
    return view('vika');
});

Route::get('/vieren', function () {
    return view('vieren');
});

Route::get('/matt', function () {
    return view('matt');
});