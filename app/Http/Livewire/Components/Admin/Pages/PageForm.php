<?php

namespace App\Http\Livewire\Components\Admin\pages;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PageInformation;

class PageForm extends Component
{
    use WithFileUploads;

    public $pageInformation;

    public function mount(PageInformation $pageInformation = null) {
        $this->pageInformation = $pageInformation && $pageInformation->id ? $pageInformation : new PageInformation;
    }
    /**
     * Render the livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.components.admin.pages.form');
    }

    protected function rules()
    {
        return [
            'pageInformation.meta_description' => 'string',
        ];
    }

    public function save()
    {
        if ($this->pageInformation->id) {
            $this->pageInformation->save();
        }

        return redirect()->route('hub.pages.view');
    }
}
