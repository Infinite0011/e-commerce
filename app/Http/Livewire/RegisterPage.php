<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\PageInformation;
use Illuminate\Support\Facades\Auth;

class RegisterPage extends Component
{
    public $email, $password, $name;
    public $agreed = false;

    public function mount() {
        $user = auth()->user();

        if ($user) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'register')->first();

        return view('livewire.register', [
            'meta_description' => $pageInformation ? $pageInformation->meta_description : ''
        ])->layout('layouts.new');
    }

    public function registerStore()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:'.User::class.',email',
            'password' => 'required',
        ]);

        $this->password = Hash::make($this->password); 
        $user = User::create(['name' => $this->name, 'email' => $this->email, 'password' => $this->password, 'is_accepted' => false]);
        $lastIndex = strrpos($this->name, ' ');

        $user->customer()->create([
            'first_name' => substr($this->name, 0, $lastIndex),
            'last_name' => substr($this->name, $lastIndex + 1)
        ]);

        session()->flash('email', $this->email);

        return redirect()->route('confirm-email.view');
    }
}