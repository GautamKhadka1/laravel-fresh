<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

//  Route::get ('/home',  [ Homecontroller :: class , 'home']);
//  Route::get ('/home',  [ Homecontroller :: class , 'home']);
 
Route::resource('car',CarController::class);
Route::get('/login', [AuthController :: class, 'login' ])->name('loginRoute');
Route::get('/register', [AuthController :: class, 'register' ])->name('register');
Route::post('/login', [AuthController :: class, 'authenticate' ])->name('storeLogin');
Route::post('/register', [AuthController :: class, 'storeUser' ])->name('storeUser');

