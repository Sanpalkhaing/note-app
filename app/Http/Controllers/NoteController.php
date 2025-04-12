<?php

namespace App\Http\Controllers;

use App\Models\notelogin;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notelogins = NoteController::all();
        return view('notelogin.login', [
            "notelogins"=> $notelogins
        ]);
    }

}
