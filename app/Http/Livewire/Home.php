<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;
use Lunar\Models\Product;
use App\Models\Blog;
use Lunar\Models\Url;
use App\Models\PageInformation;

class Home extends Component
{
    /**
     * Return the collection.
     *
     * @return void
     */
    public function getMedicineCollectionGroupProperty()
    {
        $collection = new Collection;
        return CollectionGroup::where('handle', 'medicine')->first()?->collections()->pluck($collection->getTable() . '.id')->toArray() ?? null;
    }

    /**
     * Return all images in sale collection.
     *
     * @return void
     */
    public function getSaleCollectionImagesProperty()
    {
        $collectionIds = $this->getMedicineCollectionGroupProperty();
        if ( !$collectionIds ) {
            return [];
        }

        $collection = new Collection;

        $products = Product::with('collections')->whereHas('collections', function($query) use ($collection, $collectionIds) {
            $query->whereIn($collection->getTable() . '.id', $collectionIds);
        })->inRandomOrder()->limit(4)->get();

        $saleImages = $products->map(function ($product) {
            return $product->thumbnail;
        });

        return $saleImages->chunk(2);
    }

    public function getBestSellersProperty()
    {
        $bestSellers = Product::with('collections')->latest()->limit(10)->get();

        return $bestSellers;
    }

    public function getBlogsProperty()
    {
        $blogs = Blog::latest()->limit(3)->get();

        return $blogs;
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'home')->first();
        return view('livewire.home', [
            'meta_description' => $pageInformation->meta_description
        ])->layout('layouts.new');
    }
}
