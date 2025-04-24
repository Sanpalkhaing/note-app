<?php
namespace App\Http\Controllers;

use App\Models\notelogin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function register_view()
    {
        return view('user.register');
    }

    public function register_action(Request $request)
    {

        // dd($request->name);
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:8|confirmed',
        // ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/login')->with('success', 'Registered successfully!');
    }
}
