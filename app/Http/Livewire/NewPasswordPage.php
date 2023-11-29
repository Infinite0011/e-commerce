<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PageInformation;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class NewPasswordPage extends Component
{
    public $password, $password_confirmation, $token, $email;

    public function mount(Request $request) {
        $this->token = $request->token;

        $password_resets = PasswordReset::get();
        foreach($password_resets as $password_reset) {
            if (Hash::check($this->token, $password_reset->token)) {
                $this->email = $password_reset->email;
            }
        }

        $user = auth()->user();

        if ($user) {
            return redirect()->route('home');
        } else if (!$this->email) {
            return redirect()->route('reset-password.view');
        }
    }

    public function resetPassword() {
        $validatedData = $this->validate([
            'password' => 'required|min:8|confirmed',
        ]);
        $status = Password::reset(
            [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login.view');
        } else {
            session()->flash('error', __($status));
        }
    }

    public function render()
    {
        $pageInformation = PageInformation::where('page_slug', 'new-password')->first();

        return view('livewire.new-password', [
            'meta_description' => $pageInformation ? $pageInformation->meta_description : ''
        ])->layout('layouts.new');
    }
}