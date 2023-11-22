<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminProductCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.products.create')
            ->layout('adminhub::layouts.app', [
                'title' => 'Create Product',
            ]);
    }
}
