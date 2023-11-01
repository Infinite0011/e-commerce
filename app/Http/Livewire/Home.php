<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\CollectionGroup;
use Lunar\Models\Product;
use Lunar\Models\Url;

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

    public function render()
    {
        return view('livewire.home');
    }
}
