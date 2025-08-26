<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store() {
        $atributi = request()->validate([
            'ime' => ['required'],
            'prezime' => ['required'],
            'email' => ['required','email'],
            'password' => ['required', Password::min(6), 'confirmed'],
            'role' => 'user'
        ]);

        $user = User::create($atributi);

        Auth::login($user);

        return redirect('/');
    }
}
