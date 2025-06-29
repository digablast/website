<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('authPages/login');
});

Route::get('/register', function () {
    return view('authPages/register');
});

Volt::route('/counter', 'counter');
