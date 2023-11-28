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
            'blogs' => Blog::inRandomOrder()->paginate(3),
            'trending_blogs' => Blog::inRandomOrder()->limit(3)->get(),
            'interesting_blogs' => Blog::inRandomOrder()->limit(3)->get(),
            'latest_blog' => Blog::latest()->first(),
            'meta_description' => $pageInformation->meta_description
        ])->layout('layouts.new');
    }
}
