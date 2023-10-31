<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ReferalFormPage extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        return redirect()->route('home');
    }
    
    public function render()
    {
        return view('livewire.referal-form-page')
                ->layout('layouts.base');
    }
}
