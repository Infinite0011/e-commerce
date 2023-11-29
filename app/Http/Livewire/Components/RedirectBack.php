<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Lunar\Models\Collection;

class RedirectBack extends Component
{
    public $prevUrl = '';
    public function back() {
        if ($this->prevUrl == url()->previous()) {
            return redirect()->route('home');
        }
        return redirect($this->prevUrl);
    }

    public function render()
    {
        $this->prevUrl = url()->previous();
        return view('livewire.components.redirect-back');
    }
}
