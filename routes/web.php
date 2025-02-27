<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/swoole', function () {
    return view('welcome');
});
Route::post('/swoole/test', [\App\Http\Controllers\swoole\Test::class, 'index']);