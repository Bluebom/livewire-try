<?php

use App\Livewire\UpdatePost;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', UpdatePost::class);
