<?php

namespace App\Http\Controllers;

use App\Models\notelogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class NoteController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        if($user){
            // if($user->password == $request->password){
            //     return redirect('/main');
            // }
            Auth::login($user);
            if(Hash::check($request->password, $user->password)){
                return redirect()->route('note#main');
            }

        // dd("Login Failed");
        return redirect('/login')->with('error', 'Invalid credentials. Please try again.');
    }

}}
