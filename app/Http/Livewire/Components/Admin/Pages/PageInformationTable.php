<?php

namespace App\Http\Livewire\Components\Admin\Pages;

use Livewire\Component;
use App\Models\PageInformation;

use Hash;

class PageInformationTable extends Component
{
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $pages = PageInformation::get();
        return view('livewire.components.admin.pages.table', ['pages' => $pages]);
    }
}
