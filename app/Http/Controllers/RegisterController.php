<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() { return view('register'); }

    public function store(RegisterRequest $req) {
        $user = User::create([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ]);

        Auth::login($user);

        return redirect()->route('habits.index');
    }

}
