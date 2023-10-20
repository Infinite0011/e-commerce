<?php

namespace App\Http\Livewire\Components\Admin\Blogs;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog;

class Form extends Component
{
    use WithFileUploads;

    public $blog;
    public $description;
    public $title;
    public $photo;
    public $category;
    public $tag;

    public function mount(Blog $blog = null) {
        $this->blog = $blog;
        $this->description = $blog->description;
        $this->title = $blog->title;
        $this->category = $blog->categories;
        $this->tag = $blog->tags;
    }
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.components.admin.blogs.form');
    }

    public function save()
    {
        $user = auth()->user();

        if ($this->blog) {

            $data = [
                'categories' => $this->category ? $this->category : $this->blog->categories,
                'description' => $this->description ? $this->description : $this->blog->description,
                'title' => $this->title ? $this->title : $this->blog->title,
                'image' => $this->photo ? $this->photo->store('blogs', 'public') : $this->blog->image,
                'tags' => $this->tag ? $this->tag : $this->blog->tags
            ];
            $this->blog->fill($data);
            $this->blog->save();
        } else {
            $data = [
                'categories' => $this->category ? $this->category : '',
                'description' => $this->description,
                'title' => $this->title,
                'image' => $this->photo ? $this->photo->store('blogs', 'public') : '',
                'tags' => $this->tag ? $this->tag : '',
                'user_id' => $user->id
            ];

            Blog::create($data);
        }

        return redirect()->route('hub.blogs.view');
    }
}
