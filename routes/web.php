<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\UserController;
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

Route::get('/', function(){
    return view('home');
})->name('home');
Route::get('profile', function(){
    return view('user.profile');
})->name("user.profile");
Route::get('addsave', [SaveController::class, 'add'])->name("save.add");
Route::get('about', function(){
    return view('about');
})->name("about");

Route::get('login', function(){
    return view('user.login');
})->name("login");
Route::get('registration', function(){
    return view('user.registration');
})->name("registration");
Route::get('logout', [UserController::class, 'logout'])->name("logout");


Route::post('registrate', [UserController::class, 'registrate'])->name("registrate");
Route::post('loginpost', [UserController::class, 'loginpost'])->name("loginpost");
Route::post('addpost', [SaveController::class, 'addpost'])->name("addpost");
Route::post('editlogin', [UserController::class, 'editlogin'])->name("editlogin");
Route::post('editnickname', [UserController::class, 'editnickname'])->name("editnickname");
Route::post('editpassword', [UserController::class, 'editpassword'])->name("editpassword");


Route::get('profile/posts', function() {
    return view('user.posts');
})->name("profile.posts");

Route::get('download/{filepath}', function($filepath){
    return Response::download('saves/'.$filepath);
})->name('save.download');

Route::get('edit', function() {
    return view('user.edit');
})->name("edit");

Route::get('profile/{id}', [UserController::class, 'showsomeprofile'])->name('some.profile');