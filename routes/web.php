<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/latihan', function () {
    return 'latihan laravel dasar';
});

Route::get('/latihan2/{id}', [
	App\Http\Controllers\LatihanController::class, 'latihan2'
]);
Route::get('/latihan3', function () {
    return view('latihan3');
});

Route::get('/users', [
	App\Http\Controllers\UserController::class, 'user'
]);