<?php

namespace App\Http\Livewire\Admin\Blogs\Tags;

use Livewire\Component;

class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.tags.index')
                ->layout('adminhub::layouts.app', [
                    'title' => 'Blog Tags',
                ]);
    }
}
