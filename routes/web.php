<?php

use App\Livewire\Products;
use App\Livewire\Testing;
use Illuminate\Support\Facades\Route;

Route::get('/test', Testing::class)->name('test');
Route::get('/produtos', Products::class)->name('products');

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');
