<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DriveController;
use App\Http\Controllers\HomeController;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});



Auth::routes();





//store
Route::post("/store",[DriveController::class,'store'])->name('store');

//index
Route::get('/home',[DriveController::class,'index'])->name('home');

//contact
Route::get('/contact',[DriveController::class,'create'])->name('contact');
//about
Route::get('/about',[DriveController::class,'about'])->name('about');
//projects
Route::get('/projects',[DriveController::class,'projects'])->name('projects');
Route::get('/design',[DriveController::class,'finish'])->name('finish');




//auth
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');


//table
Route::get('/table',[DriveController::class,'table'])->name('table')->middleware('auth');

//show


Route::get("show/{id}",[HomeController::class,'show'])->name("show")->middleware('auth');
//delete

Route::get("destroy/{id}",[HomeController::class,'destroy'])->name("destroy")->middleware('auth');
