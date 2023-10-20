<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Blog;

class AdminBlogEditPage extends Component
{
    public function render(Request $request)
    {
        $blog = Blog::where('id', $request->id)->first();
        return view('livewire.admin.blogs.edit', ['blog' => $blog])
                ->layout('adminhub::layouts.app', [
                    'title' => 'Blogs Create',
                ]);
    }
}
