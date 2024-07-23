<?php

namespace App\Livewire;

use App\Models\Producte;
use App\Models\TemporaryProduct;
use Livewire\Component;

class ProductForm extends Component
{
    public $product;
    public $name;
    public $price;
    public $temporaryProducts;

    public function mount($productId)
    {
        $this->product = Producte::find($productId);

        if ($this->product) {
            $this->name = $this->product->name;
            $this->price = $this->product->price;
        }

        $this->temporaryProducts = TemporaryProduct::all();
    }

    public function storeProduct()
    {
        TemporaryProduct::create([
            'name' => $this->name,
            'price' => $this->price,
        ]);

        $this->temporaryProducts = TemporaryProduct::all();
        $this->name = '';
        $this->price = '';
    }

    public function render()
    {
        return view('livewire.product-form');
    }
}
