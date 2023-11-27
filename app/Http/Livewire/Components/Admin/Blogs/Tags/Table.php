<?php

namespace App\Http\Livewire\Components\Admin\Blogs\Tags;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Tag;

class Table extends Component
{   
    use WithPagination;
    
    public $query;
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $tags = Tag::where('name', 'like', '%' . $this->query . '%')->paginate(15);
        return view('livewire.components.admin.blogs.tags.table', ['tags' => $tags]);
    }
}
