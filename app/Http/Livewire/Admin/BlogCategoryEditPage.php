<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Category;

class BlogCategoryEditPage extends Component
{
    public function render(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        return view('livewire.admin.blogs.categories.edit', ['category' => $category])
                ->layout('adminhub::layouts.app', [
                    'title' => 'Category Edit',
                ]);
    }
}
