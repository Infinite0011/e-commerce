<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\PageInformation;
use Illuminate\Support\Facades\Auth;

class LoginPage extends Component
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
        $pageInformation = PageInformation::where('page_slug', 'login')->first();

        return view('livewire.login', [
            'meta_description' => $pageInformation ? $pageInformation->meta_description : ''
        ])->layout('layouts.new');
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password, 'is_accepted' => true))) {
            return redirect()->route('home');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }
}