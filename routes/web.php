<?php

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
    return redirect()->route('login');
    //return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/log", function(){
    Log::channel('user_log')->debug("Action log debug test", ['my-string' => 'log me', "run", \Request::ip()]);
    
    return ["result" => true];
});
    
    
Route::post('/register_vue', [App\Http\Controllers\Auth\RegisterController::class, 'registerVue'])->name('register_vue');
Route::post('/login_vue', [App\Http\Controllers\Auth\LoginController::class, 'loginVue'])->name('login_vue');