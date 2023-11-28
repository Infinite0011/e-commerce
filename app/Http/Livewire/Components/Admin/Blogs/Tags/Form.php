<?php

namespace App\Http\Livewire\Components\Admin\Blogs\Tags;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Tag;
use Illuminate\Support\Str;

class Form extends Component
{
    use WithFileUploads;

    public Tag $tag;

    public function mount(Tag $tag = null) {
        $this->tag = $tag && $tag->id ? $tag : new Tag([
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
        return view('livewire.components.admin.blogs.tags.form');
    }

    protected function rules()
    {
        return [
            'tag.name' => 'required|string|unique:'.Tag::class.',name',
        ];
    }

    public function save()
    {
        $this->validate();

        $this->tag->slug = Str::slug($this->tag->name);
        $this->tag->save();

        return redirect()->route('hub.blog.tags.view');
    }
}
