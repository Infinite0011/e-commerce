<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;
use App\Models\User;
use Illuminate\Support\Facades\Password;

class ResetPasswordPage extends Component
{
    public $email;

    public function mount() {
        $user = auth()->user();

        if ($user) {
            return redirect()->route('home');
        }
    }

    public function send()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email|exists:'.User::class.',email',
        ]);

        $status = Password::sendResetLink([
            'email' => $this->email
        ]);

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('email', $this->email);
            return redirect()->route('check-email.view');
        } else {
            session()->flash('error', __($status));
        }
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'reset-password')->first();

        return view('livewire.reset-password', [
            'meta_description' => $pageInformation ? $pageInformation->meta_description : ''
        ])->layout('layouts.new');
    }
}