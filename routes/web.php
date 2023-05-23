<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\newcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
  Route::get('/',[UserController::class,'index'])->name('index');
  Route::get('/register',[UserController::class,'register'])->name('register');
  Route::post('/create',[newcontroller::class,'createregister'])->name('create');
  Route::get('/form',[newcontroller::class,'form'])->name('form');
  Route::get('/view',[newcontroller::class,'view'])->name('view');
  Route::get('/edit/{id}',[newcontroller::class,'edit'])->name('edit');
  Route::post('/update/{id}',[newcontroller::class,'update'])->name('update');
  Route::get('/delete/{id}',[newcontroller::class,'delete'])->name('delete');
