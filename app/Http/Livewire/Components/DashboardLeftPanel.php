<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class DashboardLeftPanel extends Component
{
    /**
     * The search term for the search input.
     *
     * @var string
     */
    public $term = null;

    /**
     * {@inheritDoc}
     */
    protected $queryString = [
        'term',
    ];

    /**
     * Return the collections in a tree.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCollectionsProperty()
    {
        return [];
    }

    public function render()
    {
        return view('livewire.components.dashboard-left-panel');
    }
}
