<?php

use App\Livewire\Products;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', Products::class)->name('products');

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
