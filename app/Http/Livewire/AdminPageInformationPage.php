<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Customer;

class AdminPageInformationPage extends Component
{
    public Customer $customer;
    public function render()
    {
        return view('livewire.admin.pages.index')
            ->layout('adminhub::layouts.app', [
                'title' => 'Pages',
            ]);
    }
}
