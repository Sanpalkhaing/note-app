<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
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

// Route::get("/login", function(){
//     return view("user.login");
// });
// Route::get("/register", function(){
//     return view("user.register");
// });
// Route::get("/main", function(){
//     return view("user.Main");
// });
// Route:: get('/',[NoteController::class,'index']);



//Route::get('/register', [NoteController::class, 'showRegistrationForm']);
//Route::post('/register', [NoteController::class, 'register'])->name('register');

Route::get('/login', [NoteController::class, 'index']);
Route::post('/login', [NoteController::class, 'login'])->name('login');

Route::get('/register', [RegisterController::class, 'register_view'])->name('register_view');
Route::post('/register', [RegisterController::class, 'register_action'])->name('register_action');

Route::get("/main", function(){
  return view("user.Main");
})->name('note#main');

//Route::get('/create', [NoteController::class, 'index']);
//Route::post('/create', [NoteController::class, 'login'])->name('login');



Route::get("/notes", [PostController::class, 'index'])->name('note#index');
Route::get("/note_create", [PostController::class, 'create'])->name('note#create');
Route::post("/note_store", [PostController::class, 'store'])->name('note#store');

Route::get("/note_edit/{id}", [PostController::class, 'edit'])->name('note#edit');
Route::post('/note_update/{id}', [PostController::class, 'update'])->name('note#update');

Route::get("/note_delete/{id}", [PostController::class, 'destroy'])->name('note#destroy');
