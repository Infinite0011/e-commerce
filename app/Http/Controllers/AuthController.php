<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
// use Intervention\Image\ImageManagerStatic;
// use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('login-register.view');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image' => ['required',
                        'image',
                        'mimes:jpg,png,jpeg,gif,svg',
                        'max:2048'],
        ]);
      
        $input = $request->all();
        $image  = ImageManagerStatic::make($request->file('image'))->encode('webp');
  
        $imageName = Str::random().'.webp';
  
        $image->save(public_path('images/'. $imageName));
        $input['image_name'] = $imageName;
       
        return back()
            ->with('success', 'Image converted and saved successfully!')
            ->with('imageName', $imageName);
    }
}
