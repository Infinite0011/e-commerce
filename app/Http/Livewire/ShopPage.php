<?php

namespace App\Http\Livewire;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Lunar\Models\Collection;
use Lunar\Models\Product;
use Lunar\Models\CollectionGroup;
use App\Models\PageInformation;

class ShopPage extends Component
{
    use PerformsRedirects,
        FetchesUrls;

    /**
     * {@inheritDoc}
     *
     * @param  string  $slug
     * @return void
     *
     * @throws \Http\Client\Exception\HttpException
     */
    public function mount()
    {
        $collection = new Collection;
        
        $collectionIds = CollectionGroup::where('handle', 'medicine')->first()?->collections()->pluck($collection->getTable() . '.id')->toArray() ?? null;

        if (! $collectionIds) {
            abort(404);
        }

        // $this->products = Product::with('collections')->whereHas('collections', function($query) use ($collection, $collectionIds) {
        //     $query->whereIn($collection->getTable() . '.id', $collectionIds);
        // })->inRandomOrder()->limit(4)->get();
    }

    public function getCollectionsProperty() {
        return CollectionGroup::first()->collections;
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'shop')->first();
        $products = Product::with('collections')->latest()->paginate(12);
        return view('livewire.shop-page', [
            'meta_description' => $pageInformation->meta_description,
            'products' => $products
        ])->layout('layouts.new');
    }
}
