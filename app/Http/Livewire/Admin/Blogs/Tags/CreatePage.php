<?php

namespace App\Http\Livewire\Admin\Blogs\Tags;

use Livewire\Component;

class CreatePage extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.tags.create')
                ->layout('adminhub::layouts.app', [
                    'title' => 'New Tags',
                ]);
    }
}
