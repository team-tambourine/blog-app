<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function home()
    {
        $user = \Auth::user();
        return view('userPage', ['user' => $user]);
    }
    public function show($user_id)
    {
        $user = User::find($user_id);
        return view('userPage', ['user' => $user]);
    }
}
