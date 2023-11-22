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
    public $subscription;
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
        }
    }

    public function addToCart()
    {
        $this->validate();

        // $discount = Lunar\Models\Discount::create([
        //     'name' => '20% Coupon',
        //     'handle' => '20_coupon',
        //     'type' => 'Lunar\DiscountTypes\Coupon',
        //     'data' => [
        //         'coupon' => '20OFF',
        //         'min_prices' => [
        //             'USD' => 100 // $20
        //         ],
        //     ],
        //     'starts_at' => '2022-06-17 13:30:55',
        //     'ends_at' => null,
        //     'max_uses' => null,
        // ]);
        
        $cart = CartSession::manager()->addLines([
            [
                'purchasable' => $this->purchasable,
                'quantity' => $this->quantity,
                'meta' => [
                    'subscription' => $this->subscription,
                    'orderType' => $this->orderType
                ],
            ]
        ]);

        // $cart->user_id = auth()->user() ? auth()->user()->id : null;
        // $cart->customer_id = auth()->user() ? auth()->user()->customer[0]->id : null;
        // $cart->save();

        // $line = $cart->lines->last();
        // $line->discounts()->create([
        //     'name' => '20% Coupon-' . $line->id . '-' . time(),
        //     'handle' => '20_coupon_' . $line->id . '_' . time(),
        //     'type' => 'Lunar\DiscountTypes\AmountOff',
        //     'data' => [
        //         "percentage" => "20"
        //     ],
        //     'starts_at' => '2022-06-17 13:30:55',
        //     'ends_at' => null,
        //     'max_uses' => null,
        // ]);

        $this->emit('add-to-cart');
    }

    public function render()
    {
        return view('livewire.components.add-to-cart');
    }
}
