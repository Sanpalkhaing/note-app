<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get("/login", function(){
  //  return "This is login page";
//});

// Route::get('/',function(){
// return view('Hello');
// });

Route::get("/login", function(){
    return view("user.login");
});
Route::get("/register", function(){
    return view("user.register");
});
Route::get("/main", function(){
    return view("user.Main");
});
Route:: get('/',[NoteController::class,'index']);



