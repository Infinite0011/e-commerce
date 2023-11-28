<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\PageInformation;
use Illuminate\Support\Facades\Auth;

class LoginRegisterPage extends Component
{
    public $users, $email, $password, $name, $nemail, $npassword, $phone;
    public $registerForm = false;

    public function render()
    {
        $user = auth()->user();
        $pageInformation = PageInformation::where('page_slug', 'login-register')->first();

        if ($user) {
            return view('livewire.my-account.index', [
                'meta_description' => $pageInformation->meta_description
            ]);
        }
        return view('livewire.login-register', [
            'meta_description' => $pageInformation->meta_description
        ]);
    }

    private function resetInputFields(){
        $this->name = '';
        // $this->phone = '';
        $this->email = '';
        $this->password = '';
        $this->nemail = '';
        $this->npassword = '';
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password, 'is_accepted' => true))){
            return Redirect("/my-account/orders");
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
            // 'phone' => 'required|string',
            'npassword' => 'required',
        ]);

        $this->password = Hash::make($this->npassword); 

        $user = User::create(['name' => $this->name, 'email' => $this->nemail, 'password' => $this->password]);

        $user->customer()->create([
            'first_name' => $this->name,
            'last_name' => $this->name
        ]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->resetInputFields();

    }
}