<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function create(User $user)
    {
        return view('user.create', compact('user'));
    }
}
