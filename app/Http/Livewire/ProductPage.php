<?php

namespace App\Http\Livewire;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Lunar\Models\Product;
use App\Models\OrderType;
use App\Models\OneTimePurchase;
use App\Models\Subscription;
use App\Models\PageInformation;

class ProductPage extends Component
{
    use FetchesUrls, PerformsRedirects;

    /**
     * The selected option values.
     *
     * @var array
     */
    public $selectedOptionValues = [];
    public $subscription = '1';
    public $orderType = '1';
    public $optionValues = [];


    protected $listeners = [
        'setOrderType'
    ];

    /**
     * {@inheritDoc}
     *
     * @param  string  $slug
     * @return void
     */
    public function mount($slug)
    {
        $this->url = $this->fetchUrl(
            $slug,
            Product::class,
            [
                'element.media',
                'element.variants.basePrices.currency',
                'element.variants.basePrices.priceable',
                'element.variants.values.option',
            ]
        );

        $optionValues = $this->productOptionValues->unique('id')->groupBy('product_option_id')
        ->map(function ($values) {
            return $values;
        })->values();

        $subscription = [
            'subscription' => [
                'type' => 'subscription',
                'name' => 'Subscribe & Save up to 20%',
                'child' => []
            ],
            'one-time' => [
                'type' => 'one-time',
                'name' => 'One Time Purchase',
                'child' => []
            ]
        ];
        foreach($optionValues as $optionTempValue) {
            foreach($optionTempValue as $optionValue) {
                $variant = $this->product->variants->first(function ($variant) use ($optionValue) {
                    return ! $variant->values->pluck('id')
                        ->diff(
                            collect([
                                $optionValue->product_option_id => $optionValue->id
                            ])->values()
                        )->count();
                });

                if (str_starts_with($optionValue->name->en, 'One Time')) {
                    array_unshift($subscription['one-time']['child'], [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id,
                        'description' => $optionValue->description,
                        'quantity' => $optionValue->quantity,
                        'duration' => $optionValue->duration,
                        'discount' => $variant->discount
                    ]);
                } else if (str_starts_with($optionValue->name->en, 'Subscription')) {
                    array_unshift($subscription['subscription']['child'], [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id,
                        'description' => $optionValue->description,
                        'quantity' => $optionValue->quantity,
                        'duration' => $optionValue->duration,
                        'discount' => $variant->discount
                    ]);
                }
            }
        }

        $this->subscription = $subscription;

        $this->selectedOptionValues = $this->productOptions->mapWithKeys(function ($data) {
            if (count($this->subscription['subscription']['child']) != 0)
                return [$this->subscription['subscription']['child'][0]['option_id'] => $this->subscription['subscription']['child'][0]['id']];
            else 
                return [$data['option']->id => $data['values']->first()->id];
        })->toArray();
        
        if (! $this->variant) {
            abort(404);
        }
    }

    /**
     * Computed property to get variant.
     *
     * @return \Lunar\Models\ProductVariant
     */
    public function getVariantProperty()
    {
        return $this->product->variants->first(function ($variant) {
            return ! $variant->values->pluck('id')
                ->diff(
                    collect($this->selectedOptionValues)->values()
                )->count();
        });
    }

    /**
     * Computed property to return all available option values.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getProductOptionValuesProperty()
    {
        return $this->product->variants->pluck('values')->flatten();
    }

    /**
     * Computed propert to get available product options with values.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getProductOptionsProperty()
    {
        return $this->productOptionValues->unique('id')->groupBy('product_option_id')
            ->map(function ($values) {
                return [
                    'option' => $values->first()->option,
                    'values' => $values,
                ];
            })->values();
    }

    /**
     * Computed property to return product.
     *
     * @return \Lunar\Models\Product
     */
    public function getProductProperty()
    {
        return $this->url->element;
    }

    /**
     * Return all images for the product.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getImagesProperty()
    {
        return $this->product->media;
    }

    /**
     * Computed property to return current image.
     *
     * @return string
     */
    public function getImageProperty()
    {
        if (count($this->variant->images)) {
            return $this->variant->images->first();
        }

        if ($primary = $this->images->first(fn ($media) => $media->getCustomProperty('primary'))) {
            return $primary;
        }

        return $this->images->first();
    }

    public function getOrderPlansProperty() {
        $orderTypes = OrderType::get();
        $subscriptions = Subscription::get();
        $oneTimePurchases = OneTimePurchase::get();
        
        return [
            'orderTypes' => $orderTypes,
            'subscriptions' => $subscriptions,
            'oneTimePurchases' => $oneTimePurchases
        ];
    }

    public function setOrderType($value)
    {
        if(!is_null($value)) {
            $this->orderType = $value;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'product')->first();
        return view('livewire.product-page', [
            'meta_description' => $pageInformation->meta_description
        ])->layout('layouts.new');
    }
}
