<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Models\Product;
use App\Models\Blog;
use App\Models\PageInformation;
use Illuminate\Http\Request;

class SearchPage extends Component
{
    use WithPagination;

    /**
     * {@inheritDoc}
     */
    protected $queryString = [
        'term',
    ];

    /**
     * The search term.
     *
     * @var string
     */
    public ?string $term = null;
    public $query = '';
    public $test = '';

    public function mount(Request $request) {
        $this->query = $request->term;
    }

    /**
     * Return the search results.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getResultsProperty()
    {
        return Product::search($this->query)->paginate(50);
    }

    public function getBlogResultsProperty()
    {
        return Blog::where('title', 'like', '%' . $this->query . '%')->paginate(50);
    }

    public function searchQueryChanged()
    {
        $this->term = $this->query;
    }

    public function render()
    {
        return view('livewire.search-page', [
            'meta_description' => '$pageInformation->meta_description'
        ]);
    }
}
