<?php

namespace App\Http\Livewire\Me;

use Livewire\Component;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\PageInformation;

class EditUserPage extends Component
{
    public $users, $email, $password, $name, $phone;
    public $registerForm = false;

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'my-edit-user')->first();
        return view('livewire.my-account.edit', [
            'meta_description' => $pageInformation?->meta_description
        ]);
    }

    public function mount() {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
        // $this->phone = $user->phone;
        $this->password = null;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required'
        ]);
        $user = auth()->user();
        
        $data = ['name' => $this->name, 'email' => $this->email];
        if ($this->password) {
            $this->password = Hash::make($this->password);
            $data['password'] = $this->password;
        }

        User::where('email', $user->email)
            ->update($data);
    }
}