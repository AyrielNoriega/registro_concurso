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

Auth::routes();

Route::get('/', [App\Http\Controllers\UserController::class, 'create'])->name('user.registro');

Route::post('/registro', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');

// Route::post('/login', [App\Http\Controllers\UserController::class, 'store'])->name('user.registro');

Route::get('/all', [App\Http\Controllers\CiudadController::class, 'show']);

Route::get('/admin', [App\Http\Controllers\UserController::class, 'index'])->name('user.admin');
// ->middleware('auth');;

Route::get('/admin/all', [App\Http\Controllers\UserController::class, 'show'])->name('user.all');
Route::get('/admin/concurso', [App\Http\Controllers\UserController::class, 'concurso'])->name('user.concurso');
 