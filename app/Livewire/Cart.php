<?php

namespace App\Livewire;

use App\Models\Shop;
use Livewire\Component;
use Livewire\Attributes\On; 

class Cart extends Component
{
    public function render()
    {
        return view('livewire.cart');
    }
}
