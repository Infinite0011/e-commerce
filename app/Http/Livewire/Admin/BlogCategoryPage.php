<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class BlogCategoryPage extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.categories.index')
                ->layout('adminhub::layouts.app', [
                    'title' => 'Blog Categories',
                ]);
    }
}
