<?php

namespace App\Http\Livewire\Me;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Livewire\WithPagination;
use Lunar\Models\Order;

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
        return view('livewire.my-account.referal-information', [
            'referalInformation' => $referalInformation,
        ]);
    }
}
