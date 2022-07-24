<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
        // dd('logout');
        session()->flush();
        session()->put('is_login', false);
        return redirect()->route('home');
        // auth()->logout();
        // return redirect()->route('home');
    }
}
