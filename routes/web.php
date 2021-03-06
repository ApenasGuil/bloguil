<?php

use Illuminate\Support\Facades\{
    Route,
};
use App\Http\Controllers\{
    AuthController,
    PostController,
};

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

Route::view('/login', 'system.login')->name('form.login');
Route::post('/login', [AuthController::class, 'login'])->name('login.do');
Route::view('/register', 'system.register')->name('form.register');
Route::post('/register', [AuthController::class, 'register'])->name('register.do');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout.do');

Route::resource('post', PostController::class)->names('post');