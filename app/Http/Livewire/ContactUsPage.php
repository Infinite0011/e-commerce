<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;

class ContactUsPage extends Component
{
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'contact-us')->first();
        return view('livewire.contact-us-page', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
