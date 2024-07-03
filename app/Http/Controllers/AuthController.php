<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Autenticar al usuario recién registrado
        Auth::login($user);

        return redirect('/dashboard')->with('success', '¡Usuario registrado correctamente!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if(!Auth::attempt($request->only(['email', 'password'])))
        {
            return redirect()->back()->withInput()->withErrors(['email' => 'Credenciales inválidas']);
        }

        return redirect('/')->with('success', 'Inicio de sesión correcto');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', '¡Sesión cerrada correctamente!');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect('/')->with('success', '¡Usuario eliminado correctamente!');
    }
}
