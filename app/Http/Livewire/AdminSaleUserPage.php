<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminSaleUserPage extends Component
{
    public function render()
    {
        return view('livewire.admin.saleuser.index')
                ->layout('adminhub::layouts.app', [
                    'title' => 'Wholesale Users',
                ]);
    }
}
