<?php

namespace App\Http\Livewire\Me;

use Livewire\Component;
use Hash;
use App\Models\PageInformation;

class AddressPage extends Component
{
    public $customer;
    public $shipping;
    public $billing;

    public function mount()
    {
        $user = auth()->user();
        $this->customer = $user->customers->first();
        $shippingAddress = $this->customer ? $this->customer->addresses()->where('shipping_default', 1)->first() : null;
        $billingAddress = $this->customer ? $this->customer->addresses()->where('billing_default', 1)->first() : null;
        $this->shipping = $shippingAddress ? $shippingAddress : null;
        $this->billing = $billingAddress ? $billingAddress : null;
    }
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'my-address')->first();
        return view('livewire.my-account.address', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}