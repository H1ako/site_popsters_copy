<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/blog', function (){
    return view('blog');
})->name('blog');
