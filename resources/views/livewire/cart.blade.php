<div>
    @if ($cart->isNotEmpty())
    {{ $cart->last()->id }}
    @else
        0
    @endif
</div>
