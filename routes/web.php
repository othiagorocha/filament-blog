<?php


declare(strict_types=1);

use App\Livewire\CreatePost;
use App\Livewire\Logs;
use Illuminate\Support\Facades\Route;

Route::get('/', CreatePost::class);
Route::get('/logs/integracao-ploomes', Logs\IntegracaoPloomes::class)->name('logs.integracao');
