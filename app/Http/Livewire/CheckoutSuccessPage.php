<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Lunar\Facades\CartSession;
use Lunar\Facades\ShippingManifest;
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
        $user = auth()->user();
        if ($user) {
            foreach($this->order->physicalLines as $line) {
                $user->subscriptions()->create([
                    'order_line_id' => $line->id,
                    'product_id' => $line->purchasable->product_id,
                    'product_option_value_id' => $line->meta['subscription']['id']
                ]);
            }
        }

        CartSession::forget();
    }

    public function getShippingOptionProperty()
    {
        $shippingAddress = $this->cart->shippingAddress;

        if (! $shippingAddress) {
            return;
        }

        if ($option = $shippingAddress->shipping_option) {
            return ShippingManifest::getOptions($this->cart)->first(function ($opt) use ($option) {
                return $opt->getIdentifier() == $option;
            });
        }

        return null;
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'checkout-success')->first();
        return view('livewire.checkout-success-page', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
