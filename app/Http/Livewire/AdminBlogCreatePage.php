<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminBlogCreatePage extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.create')
                ->layout('adminhub::layouts.app', [
                    'title' => 'Blogs Create',
                ]);
    }
}
