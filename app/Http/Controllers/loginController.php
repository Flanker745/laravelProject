<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function create(){
        return view("auth.login");
    }
    public function store(){
      $attrs =   request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(!Auth::attempt($attrs)){
            throw ValidationException::withMessages([
                "email" => "details not match",
            ]);
        }
        request()->session()->regenerate();
        return redirect('/');
    }
    public function destroy(){
        auth()->logout();
        return redirect("/login");
    }
}
