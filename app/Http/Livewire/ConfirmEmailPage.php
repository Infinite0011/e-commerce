<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;

class ConfirmEmailPage extends Component
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
        $pageInformation = PageInformation::where('page_slug', 'confirm-email')->first();

        return view('livewire.confirm-email', [
            'meta_description' => $pageInformation ? $pageInformation->meta_description : ''
        ])->layout('layouts.new');
    }
}