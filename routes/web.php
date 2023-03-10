<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
// use App\Http\Controllers\PagesController;
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
Route::get('/user', 'UserController@index');

Auth::routes();
Route::post('/upload', [App\Http\Controllers\UserController::class, 'upload'])->name('upload');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
