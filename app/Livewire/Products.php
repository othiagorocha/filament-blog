<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public array $products;
    public string $search = '';
    public array $dropdowns = [
        'actions' => false,
        'filter' => false,
    ];

    public function toggleDropdown(string $dropdown)
    {
        $this->dropdowns[$dropdown] = !$this->dropdowns[$dropdown];
    }


    public function mount()
    {
        $response = Http::get('https://dummyjson.com/products')->json();
        $this->products = $response['products'];
    }

    public function updatingSearch()
    {
        $response = Http::get('https://dummyjson.com/products')->json();
        $this->products = collect($response['products'])->filter(function ($product) {
            return str_contains(strtolower($product['id']), strtolower($this->search)) ||
                str_contains(strtolower($product['title']), strtolower($this->search)) ||
                str_contains(strtolower($product['description']), strtolower($this->search)) ||
                str_contains(strtolower($product['price']), strtolower($this->search)) ||
                str_contains(strtolower($product['category']), strtolower($this->search));
        })->toArray();
    }

    public function render()
    {
        return view('livewire.products');
    }
}
