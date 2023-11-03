<?php

namespace App\Http\Livewire\Me;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Livewire\WithPagination;
use Lunar\Models\Order;
use App\Models\PageInformation;

class ReferalInformationPage extends Component
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
        $referalInformation = auth()->user()->referalInformation;
        $pageInformation = PageInformation::where('page_slug', 'my-referal-information')->first();
        return view('livewire.my-account.referal-information', [
            'referalInformation' => $referalInformation,
            'meta_description' => $pageInformation->meta_description
        ]);
    }
}
