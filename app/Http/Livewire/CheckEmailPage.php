<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;

class CheckEmailPage extends Component
{
    public $email, $password;

    public function mount() {
        $user = auth()->user();

        if ($user) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'check-email')->first();

        return view('livewire.check-email', [
            'meta_description' => $pageInformation ? $pageInformation->meta_description : ''
        ])->layout('layouts.new');
    }
}