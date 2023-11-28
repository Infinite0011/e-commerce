<?php

namespace App\Http\Livewire\Me;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Livewire\WithPagination;
use Lunar\Models\Order;
use App\Models\PageInformation;

class SubscriptionPage extends Component
{
    use PerformsRedirects,
        FetchesUrls;
    use WithPagination;
    /**
     * {@inheritDoc}
     *
     * @param  string  $slug
     * @return void
     *
     * @throws \Http\Client\Exception\HttpException
     */
    public function render()
    {
        $user = auth()->user();
        $pageInformation = PageInformation::where('page_slug', 'my-subscription')->first();
        $subscriptions = $user->subscriptions()->with(['product', 'orderLine'])->latest()->paginate(10);
        return view('livewire.my-account.subscription', [
            'subscriptions' => $subscriptions,
            'meta_description' => $pageInformation ? $pageInformation->meta_description : ''
        ]);
    }
}
