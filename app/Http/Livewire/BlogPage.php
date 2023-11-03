<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;
use App\Models\PageInformation;

class BlogPage extends Component
{
    use WithPagination;

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'blog')->first();
        return view('livewire.blog-page', [
            'blogs' => Blog::latest()->paginate(10),
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
