<?php

namespace App\Http\Livewire\Components\Blog;

use Livewire\Component;
use App\Models\Blog;

use Hash;

class ListItem extends Component
{
    public Blog $blog;
    public function mount(Blog $blog)
    {
        $this->blog = $blog;
    }
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.components.blog.list-item');
    }
}
