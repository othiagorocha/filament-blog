<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Products extends Component
{
    public array $products;
    public string $search = '';

    public function mount()
    {
        $response = Http::get('https://dummyjson.com/products')->json();
        $this->products = $response['products'];
    }

    public function updatingSearch()
    {
        $response = Http::get('https://dummyjson.com/products')->json();
        $this->products = collect($response['products'])->filter(function ($product) {
            return str_contains(strtolower($product['title']), strtolower($this->search));
        })->toArray();
    }

    public function render()
    {
        return view('livewire.products');
    }
}
