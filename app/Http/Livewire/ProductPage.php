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
        'setSubscription',
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
        foreach($optionValues as $optionTempValue) {
            foreach($optionTempValue as $optionValue) {
                if ($optionValue->name->en == 'One Time - 1') {
                    $this->optionValues['o_1'] = [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id
                    ];
                } else if ($optionValue->name->en == 'One Time - 2') {
                    $this->optionValues['o_2'] = [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id
                    ];
                } else if ($optionValue->name->en == 'One Time - 3') {
                    $this->optionValues['o_3'] = [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id
                    ];
                } else if ($optionValue->name->en == 'Subscription - 1') {
                    $this->optionValues['s_1'] = [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id
                    ];
                } else if ($optionValue->name->en == 'Subscription - 2') {
                    $this->optionValues['s_2'] = [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id
                    ];
                } else if ($optionValue->name->en == 'Subscription - 3') {
                    $this->optionValues['s_3'] = [
                        'option_id' => $optionValue->product_option_id,
                        'id' => $optionValue->id
                    ];
                }
            }
        }

        $this->selectedOptionValues = $this->productOptions->mapWithKeys(function ($data) {
            return [$this->optionValues['s_3']['option_id'] => $this->optionValues['s_3']['id']];
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

    public function setSubscription($value)
    {
        if(!is_null($value))
            $this->subscription = $value;
    }

    public function setOrderType($value)
    {
        if(!is_null($value)) {
            if ($value != $this->orderType) $this->subscription = 1;
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
        ]);
    }
}
