<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminBlogPage extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.index')
                ->layout('adminhub::layouts.app', [
                    'title' => 'Blogs',
                ]);
    }
}
