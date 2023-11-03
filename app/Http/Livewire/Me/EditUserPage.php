<?php

namespace App\Http\Livewire\Me;

use Livewire\Component;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\PageInformation;

class EditUserPage extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'my-edit-user')->first();
        return view('livewire.my-account.edit', [
            'meta_description' => $pageInformation?->meta_description
        ]);
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = auth()->user();
        $this->password = Hash::make($this->password); 

        User::where('email', $user->email)
            ->update(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        $this->resetInputFields();
    }
}