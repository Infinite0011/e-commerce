<?php

namespace App\Http\Livewire\Me;

use App\Traits\FetchesUrls;
use Livewire\Component;
use Livewire\ComponentConcerns\PerformsRedirects;
use Livewire\WithPagination;
use Lunar\Models\Order;

class OrderPage extends Component
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
        return view('livewire.my-account.order', [
            'orders' => Order::paginate(10),
        ]);
    }
}
