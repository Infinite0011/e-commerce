<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class BlogCategoryCreatePage extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.categories.create')
                ->layout('adminhub::layouts.app', [
                    'title' => 'New Categories',
                ]);
    }
}
