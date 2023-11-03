<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;

class TestimonialNewPage extends Component
{
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'testimonial-new')->first();
        return view('livewire.testimonial-new-page', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
