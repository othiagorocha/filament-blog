<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Products extends Component
{
    public array $products;

    public function mount()
    {
        $response = Http::get('https://dummyjson.com/products')->json();
        $this->products = $response['products'];
    }

    public function render()
    {
        return view('livewire.products');
    }
}
