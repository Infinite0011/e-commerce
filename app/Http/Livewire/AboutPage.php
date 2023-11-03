<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;

class AboutPage extends Component
{
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'about')->first();
        return view('livewire.about-page', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
