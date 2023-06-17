<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\watchController;

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
    return view('welcome');
});

Route::get('/watch', [watchController::class, 'watchserve']);
Route::get('/detail/{id}', [watchController::class, 'detaile']);
Route::get('/index', [watchController::class, 'indexs']);
Route::post('/index', [watchController::class, 'form']);

Route::get('/carts/{id}', [watchController::class,'prodect']);
Route::get('/deletcart/{id}', [watchController::class,'delet']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
