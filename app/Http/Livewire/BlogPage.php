<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class BlogPage extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.blog-page', [
            'blogs' => Blog::latest()->paginate(10),
        ]);
    }
}
