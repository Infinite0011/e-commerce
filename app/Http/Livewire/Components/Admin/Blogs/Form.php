<?php

namespace App\Http\Livewire\Components\Admin\Blogs;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Support\Str;

class Form extends Component
{
    use WithFileUploads;

    public $blog;
    public $description;
    public $meta_description;
    public $title;
    public $photo;
    public $categories;
    public $tags;
    public $all_categories;

    public $listeners = [
        'updateSelected' => 'updateSelected'
     ];
     

    public function mount(Blog $blog = null) {
        $user = auth()->user();

        $this->blog = $blog && $blog->id ? $blog : new Blog([
            'status' => 'draft',
            'user_id' => $user->id
        ]);
        $this->description = $blog->description;
        $this->meta_description = $blog->meta_description;
        $this->title = $blog->title;
        $categories = $blog->categories->toArray();
        foreach($categories as $category) {
            $this->categories[] = [
                'id' => $category['id'],
                'name' => $category['name']
            ];
        }
        $this->tags = $blog->tags()->pluck('tags.name')->toArray();
        $this->all_categories = Category::get();
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

    public function updateSelected($selected) {
        $this->categories = $selected;
    }

    protected function rules()
    {
        return [
            'blog.status' => 'required|string',
        ];
    }

    public function save()
    {
        $user = auth()->user();

        $data = [
            'description' => $this->description ? $this->description : $this->blog->description,
            'meta_description' => $this->meta_description ? $this->meta_description : $this->blog->meta_description,
            'title' => $this->title ? $this->title : $this->blog->title,
            'image' => $this->photo ? $this->photo->store('blogs', 'public') : $this->blog->image,
        ];
        
        $this->blog->fill($data);
        $this->blog->save();

        $categoryIds = [];
        foreach($this->categories as $category) {
            $categoryIds[] = $category['id'];
        }
        $this->blog->categories()->sync($categoryIds);

        $tagIds = [];
        foreach($this->tags as $tag) {
            $tagModel = Tag::firstOrCreate([
                'name' => $tag,
                'slug' => Str::slug($tag)
            ]);
            $tagIds[] = $tagModel->id;
        }

        $this->blog->tags()->sync($tagIds);

        return redirect()->route('hub.blogs.view');
    }
}
