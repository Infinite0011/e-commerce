<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Lunar\Facades\CartSession;
use Lunar\Models\Cart;
use Lunar\Models\Order;
use App\Models\PageInformation;

class CheckoutSuccessPage extends Component
{
    use PerformsRedirects;

    public ?Cart $cart;

    public Order $order;

    /**
     * {@inheritDoc}
     *
     * @return void
     */
    public function mount()
    {
        $this->cart = CartSession::current();
        if (! $this->cart || ! $this->cart->completedOrder) {
            $this->redirect('/');

            return;
        }
        $this->order = $this->cart->completedOrder;

        CartSession::forget();
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'checkout-success')->first();
        return view('livewire.checkout-success-page', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
