<?php

use App\Livewire\ListProducts;
use App\Models\Product;
use Livewire\Livewire;

it('should render the list of products', function () {
    Product::factory(3)->create();
    $firstProduct = Product::first();
    Livewire::test(ListProducts::class)
        ->assertSee($firstProduct->name)
        ->assertSee($firstProduct->price);
});