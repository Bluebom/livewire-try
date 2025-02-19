<?php

use App\Livewire\ListProducts;
use App\Livewire\ListProductsTwo;
use App\Livewire\UpdatePost;
use App\Models\Investor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{postId}', UpdatePost::class);

Route::get('/products', ListProducts::class);

Route::get('/products-two', ListProductsTwo::class);

Route::get('/investors/{q}', function(string $q) {
    return \App\Models\Investor::search($q)->get();
});