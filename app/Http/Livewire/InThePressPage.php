<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;

class InThePressPage extends Component
{
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'in-the-press')->first();
        return view('livewire.in-the-press-page', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
