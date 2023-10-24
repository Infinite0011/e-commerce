<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class BlogViewPage extends Component
{
    use WithPagination;

    public function render(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        return view('livewire.blog-detail-page', [
            'blog' => $blog,
        ]);
    }
}
