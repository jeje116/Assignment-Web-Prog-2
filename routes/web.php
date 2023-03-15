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
    return view('JejeHome', ['temp' => 1]);
});

Route::get('/JejeHome/{temp}', function($temp){   
    return view('JejeHome', ['temp' => $temp]);
});


Route::get('/vikaHome', function () {
    return view('vikaHome', ['temp' => 1]);
});

Route::get('/vikaHome/{temp}', function($temp){   
    return view('vikaHome', ['temp' => $temp]);
});

Route::get('/vierenHome', function () {
    return view('vierenHome', ['temp' => 1]);
});

Route::get('/vierenHome/{temp}', function($temp){   
    return view('vierenHome', ['temp' => $temp]);
});

Route::get('/mattHome', function () {
    return view('mattHome', ['temp' => 1]);
});

Route::get('/mattHome/{temp}', function($temp){   
    return view('mattHome', ['temp' => $temp]);
});