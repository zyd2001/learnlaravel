<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }
    
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt(request(['email', 'password'])))
        {
            return back()->withErrors([
                'message' => 'Wrong credentials'
            ]);
        }
        return redirect()->home();
    }

    public function destory()
    {
        auth()->logout();
        return redirect()->home();
    }
}