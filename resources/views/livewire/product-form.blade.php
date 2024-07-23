<div>

    <button wire:click="storeProduct" type="submit" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>
        Add to cart
    </button>
    <input type="text" wire:model="name" placeholder="اسم المنتج" hidden>
    <input type="text" wire:model="price" placeholder="سعر المنتج" hidden>
    
</div>
