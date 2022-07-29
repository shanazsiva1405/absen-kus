<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/user',UserController::class);
Route::resource('/siswa',SiswaController::class);


// Route::resource('user', 'UserController@index');
// Route::resource('user', UserController::class);
// Route::get('/user', [UserController::class, 'user.index']);

//Route::resource('/user', [UserController::class, 'user.index']);
// Route::resource('/user', UserController::class);
// Route::get('/', 'App\Http\Controllers\UserController@login');



// Route::get('/user',[UserController::class, 'index']);
