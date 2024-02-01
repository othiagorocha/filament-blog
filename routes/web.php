<?php


declare(strict_types=1);

use App\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;

Route::get('/', CreatePost::class);
