<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/signup', function () {
    return view('auth.signup');
});
Route::post('/login', [AuthController::class, 'LoginPost'])->name('login.post');
Route::post('/login', [AuthController::class, 'LoginPost'])->name('login.post');
Route::post('/signup', [AuthController::class, 'SignUpPost'])->name('signup.post');
use App\Http\Controllers\HomeController;
Route::post('/', [HomeController::class, 'index'])->name('home');
Route::get('/' ,function(){
return view('home');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/proudect', function () {
    return view('proudect');
});
use Illuminate\Support\Facades\DB;

Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Connected successfully to the database.";
    } catch (\Exception $e) {
        return "Could not connect to the database. Error: " . $e->getMessage();
    }
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

