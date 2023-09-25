<?php

namespace App\Http\Livewire\Me;

use Livewire\Component;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AddressPage extends Component
{
    public $users, $email, $password, $name, $nemail, $npassword;
    public $registerForm = false;

    public function render()
    {
        return view('livewire.my-account.address');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            return Redirect("/");
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    public function registerStore()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'nemail' => 'required|email',
            'npassword' => 'required',
        ]);

        $this->password = Hash::make($this->npassword); 

        $user = User::create(['name' => $this->name, 'email' => $this->nemail,'password' => $this->password]);

        $user->customer()->create([
            'first_name' => $this->name,
            'last_name' => $this->name
        ]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->resetInputFields();

    }
}