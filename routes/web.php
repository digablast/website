<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
});

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'login');
        Route::get('/register', 'register');
    });


Volt::route('/counter', 'counter');
