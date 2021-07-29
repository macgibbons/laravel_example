<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($attributes)) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'could not verify account']);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Good bye');
    }
}
