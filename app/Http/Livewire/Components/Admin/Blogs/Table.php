<?php

namespace App\Http\Livewire\Components\Admin\Blogs;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Blog;

class Table extends Component
{   
    use WithPagination;

    public $query;

    protected $queryString = ['query'];
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $blogs = Blog::latest()->where('title', 'like', '%' . $this->query . '%')->paginate(15);
        return view('livewire.components.admin.blogs.table', ['blogs' => $blogs]);
    }
}
