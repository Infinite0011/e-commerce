<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Facades\CartSession;

class Navigation extends Component
{
    /**
     * The search term for the search input.
     *
     * @var string
     */
    public $term = null;
    public $cartCount = 0;

    /**
     * {@inheritDoc}
     */
    protected $queryString = [
        'term',
    ];

    protected $listeners = [
        'add-to-cart' => 'handleAddToCart',
    ];

    public function mount() {
        $cart = CartSession::current();
        if ($cart) {
            $this->cartCount = $cart->lines->sum('quantity');
        }
    }

    /**
     * Return the collections in a tree.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCollectionsProperty()
    {
        return Collection::with(['defaultUrl'])->get()->toTree();
    }

    public function handleAddToCart() {
        $cart = CartSession::current();
        if ($cart) {
            $this->cartCount = $cart->lines->sum('quantity');
        }
    }

    public function render()
    {
        return view('livewire.components.navigation');
    }
}
