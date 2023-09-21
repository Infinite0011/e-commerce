<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('login-register.view');
    }
}
