<?php

namespace App\Http\Livewire\Admin\Blogs\Tags;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Tag;

class EditPage extends Component
{
    public function render(Request $request)
    {
        $tag = Tag::where('id', $request->id)->first();
        return view('livewire.admin.blogs.tags.edit', ['tag' => $tag])
                ->layout('adminhub::layouts.app', [
                    'title' => 'Tag Edit',
                ]);
    }
}
