<?php

namespace App\Http\Livewire\Components\Admin\Blogs;

use Livewire\Component;
use App\Models\Blog;

class Table extends Component
{   
    public $query;
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $blogs = Blog::latest()->where('title', 'like', '%' . $this->query . '%')->get();
        return view('livewire.components.admin.blogs.table', ['blogs' => $blogs]);
    }
}
