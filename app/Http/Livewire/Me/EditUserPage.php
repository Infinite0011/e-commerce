<?php

namespace App\Http\Livewire\Me;

use Livewire\Component;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditUserPage extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.my-account.edit');
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