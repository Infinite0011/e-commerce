<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class AdminProductShow extends Component
{
    /**
     * The Product we are currently editing.
     */
    public Product $product;

    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.admin.products.show')
            ->layout('adminhub::layouts.app', [
                'title' => 'Edit Product',
            ]);
    }
}
