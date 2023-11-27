<?php

namespace App\Http\Livewire\Components\Admin\Blogs\Categories;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Category;

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
        $categories = Category::where('name', 'like', '%' . $this->query . '%')->paginate(15);
        return view('livewire.components.admin.blogs.categories.table', ['categories' => $categories]);
    }
}
