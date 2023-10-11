<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Lunar\Base\Purchasable;
use Lunar\Facades\CartSession;

class AddToCart extends Component
{
    /**
     * The purchasable model we want to add to the cart.
     *
     * @var Purchasable
     */
    public ?Purchasable $purchasable = null;
    public $subscription = '1';
    public $orderType = '1';

    /**
     * The quantity to add to cart.
     *
     * @var int
     */
    public $quantity = 1;

    /**
     * {@inheritDoc}
     */
    public function rules()
    {
        return [
            'quantity' => 'required|numeric|min:1|max:10000',
        ];
    }

    public function addToCart()
    {
        $this->validate();
        CartSession::manager()->addLines([
            [
                'purchasable' => $this->purchasable,
                'quantity' => $this->quantity,
                'meta' => [
                    'subscription' => $this->subscription,
                    'orderType' => $this->orderType
                ],
            ]
        ]);
        $this->emit('add-to-cart');
    }

    public function render()
    {
        return view('livewire.components.add-to-cart');
    }
}
