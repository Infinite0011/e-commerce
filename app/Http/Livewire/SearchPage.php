<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Models\Product;
use App\Models\PageInformation;

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

    /**
     * Return the search results.
     *
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function getResultsProperty()
    {
        return Product::search($this->term)->paginate(50);
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'search')->first();
        return view('livewire.search-page', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
