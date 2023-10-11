<?php

namespace App\View\Components;

use App\Helpers\PriceCalc;
use Illuminate\View\Component;
use Lunar\Facades\Pricing;
use Lunar\Models\Price;
use Lunar\Models\ProductVariant;

class ProductPrice extends Component
{
    public $price = 0;
    public $pricePerCapsule = 0;

    public ?ProductVariant $variant = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product = null, $variant = null, $subscription = null, $orderType = null)
    {
        $n_price = Pricing::for(
            $variant ?: $product->variants->first()
        )->get()->matched;

        $this->price = PriceCalc::get($n_price, $subscription, $orderType);

        $this->pricePerCapsule = round($this->price / max($product->translateAttribute('capsule_count'), 1), 2);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-price');
    }
}
