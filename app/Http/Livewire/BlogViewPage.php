<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;
use App\Models\PageInformation;

class BlogViewPage extends Component
{
    use WithPagination;

    public function render(Request $request)
    {
        $pageInformation = PageInformation::where('page_slug', 'blog-view')->first();
        $blog = Blog::where('id', $request->id)->first();
        return view('livewire.blog-detail-page', [
            'blog' => $blog,
            'meta_description' => $blog->meta_description ? $blog->meta_description : $pageInformation->meta_description
        ])->layout('layouts.new');
    }
}
