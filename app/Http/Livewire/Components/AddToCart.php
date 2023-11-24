<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Lunar\Base\Purchasable;
use Lunar\Facades\CartSession;
use App\Models\Subscription;
use App\Models\OneTimePurchase;
use Lunar\Hub\Http\Livewire\Traits\Notifies;

class AddToCart extends Component
{
    use Notifies;
    /**
     * The purchasable model we want to add to the cart.
     *
     * @var Purchasable
     */
    public ?Purchasable $purchasable = null;
    public $selectedOptionValue;
    public $subscription;
    public $optionValue;
    public $orderType;

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
        if (auth()->user() && auth()->user()->is_sales_account) {
            return [
                'quantity' => 'required|numeric|min:50|max:10000',
            ];
        } else {
            return [
                'quantity' => 'required|numeric|min:1|max:10000',
            ];
        }
    }

    public function mount()
    {
        $this->user = auth()->user();
        if ($this->user && $this->user->is_sales_account) {
            $this->quantity = 50;
        } else {
            foreach($this->subscription as $subscrip) {
                foreach($subscrip['child'] as $child) {
                    if($this->selectedOptionValue[$child['option_id']] == $child['id']) {
                        $this->quantity = $child['quantity'];
                        $this->optionValue = $child;
                    }
                }
            }
        }
    }

    public function addToCart()
    {
        $this->validate();
        
        $cart = CartSession::manager()->addLines([
            [
                'purchasable' => $this->purchasable,
                'quantity' => $this->quantity,
                'meta' => [
                    'subscription' => $this->optionValue,
                    'orderType' => $this->orderType
                ],
            ]
        ]);

        $this->emit('add-to-cart');

        $this->notify('New cart Added');
    }

    public function render()
    {
        return view('livewire.components.add-to-cart');
    }
}
