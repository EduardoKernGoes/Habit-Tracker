<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(LoginRequest $req){

        $credentials =  $req->only('email', 'password');

        if(Auth::attempt($credentials)){
            $req->session()->regenerate();

            return redirect()->intended(route('habits.index'));
        }

        return back()->withErrors([
            'email' => 'Credenciais Inválidas',
        ]);
    }

    public function logout(Request $req): RedirectResponse{
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect(route('site.home'));
    }
}
