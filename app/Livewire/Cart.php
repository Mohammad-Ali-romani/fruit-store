<?php

namespace App\Livewire;

use App\Models\Carts;
use App\Models\Shop;
use Livewire\Component;
use Livewire\Attributes\On; 

class Cart extends Component
{
    public $cart = [];
    public function __construct (){
        $this->cart = Carts::all();
        $this->dispatch('cart-created'); 
    }
    #[On('cart-created')] 
    public function updatePostList()
    {
        $this->cart = Carts::all();
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
