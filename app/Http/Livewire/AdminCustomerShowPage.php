<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Customer;

class AdminCustomerShowPage extends Component
{
    public Customer $customer;
    public function render()
    {
        return view('livewire.admin.customers.show')
            ->layout('adminhub::layouts.app', [
                'title' => $this->customer->fullName,
            ]);
    }
}
