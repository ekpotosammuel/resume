<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // dd($request->only('email', 'password'));
        $this->validate($request, [
            'name'      => 'required',
            'email'     =>  'required',
            'password'  =>  'required'
        ]);
        // dd($request->name);
        User::create([
            'name'      => $request->name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('dashboard');
        // dd('abc');
        // $user = new User($request->all());
        // $user->save();
        // return response()->json([
        //     "status"=>"Success",
        //     "data"=>$user
        // ]);
    }
}
