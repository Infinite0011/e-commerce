<?php

namespace App\Http\Livewire\Components\Admin\Blogs\Categories;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use Illuminate\Support\Str;

class Form extends Component
{
    use WithFileUploads;

    public Category $category;

    public function mount(Category $category = null) {
        $this->category = $category && $category->id ? $category : new Category([
            'status' => 'draft',
        ]);
    }
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.components.admin.blogs.categories.form');
    }

    protected function rules()
    {
        return [
            'category.name' => 'required|string|unique:'.Category::class.',name',
        ];
    }

    public function save()
    {
        $this->validate();

        $this->category->slug = Str::slug($this->category->name);
        $this->category->save();

        return redirect()->route('hub.blog.categories.view');
    }
}
