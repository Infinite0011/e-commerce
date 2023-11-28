<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;
use Lunar\Models\ProductVariant;

class AdminVariantShow extends Component
{
    /**
     * The current product.
     */
    public Product $product;

    /**
     * The current variant.
     */
    public ProductVariant $variant;

    /**
     * Save the variant.
     *
     * @return void
     */
    public function save()
    {
        $this->variant->save();
    }

    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.admin.products.variants.show')
            ->layout('adminhub::layouts.app', [
                'title' => 'Edit Variant',
            ]);
    }
}
