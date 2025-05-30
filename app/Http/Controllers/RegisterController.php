<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

$user = User::create([
    'name' => $validated['name'],
    'email' => $validated['email'],
    'password' => $validated['password'], // tanpa Hash::make()
]);

        // Login otomatis setelah register
        Auth::login($user);

        return redirect('/home');
    }
}
