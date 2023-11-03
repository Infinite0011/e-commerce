<?php

namespace App\Http\Livewire\Me;

use Livewire\Component;

use Lunar\Models\Country;
use Lunar\Models\Address;
use App\Models\PageInformation;

use Hash;

class EditAddressPage extends Component
{
    public $type;
    public ?Address $shipping = null;
    public ?Address $billing = null;
    public $customer;

    public function mount($type)
    {
        $user = auth()->user();
        $this->type = $type;
        $this->customer = $user->customers->first();
        $shippingAddress = $this->customer ? $this->customer->addresses()->where('shipping_default', 1)->first() : null;
        $billingAddress = $this->customer ? $this->customer->addresses()->where('billing_default', 1)->first() : null;
        $this->shipping = $shippingAddress ? $shippingAddress : new Address;
        $this->billing = $billingAddress ? $billingAddress : new Address;
    }

    public function getCountriesProperty()
    {
        return Country::whereIn('iso3', ['GBR', 'USA'])->get();
    }

    public function saveAddress($type)
    {
        $validatedData = $this->validate(
            $this->getAddressValidation($type)
        );
        
        $address = $this->{$type};
        $validatedData[$type]['customer_id'] = $this->customer->id;
        $validatedData[$type][$type . '_default'] = 1;
        $address->fill($validatedData[$type]);
        $address->save();

        return redirect()->route('edit-address.view');
    }

    public function rules()
    {
        return array_merge(
            $this->getAddressValidation('shipping'),
            $this->getAddressValidation('billing')
        );
    }

    protected function getAddressValidation($type)
    {
        return [
            "{$type}.first_name" => 'required',
            "{$type}.last_name" => 'required',
            "{$type}.line_one" => 'required',
            "{$type}.country_id" => 'required',
            "{$type}.city" => 'required',
            "{$type}.postcode" => 'required',
            "{$type}.company_name" => 'nullable',
            "{$type}.line_two" => 'nullable',
            "{$type}.line_three" => 'nullable',
            "{$type}.state" => 'nullable',
            "{$type}.delivery_instructions" => 'nullable',
            "{$type}.contact_email" => 'required|email',
            "{$type}.contact_phone" => 'nullable',
        ];
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'my-edit-address')->first();
        return view('livewire.my-account.edit-address', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}