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
    return view('welcome');
});
Route::get('/home/Welcome',[\App\Http\Controllers\HomeController::class,'Welc'])->name('welcome');
Route::get('home/Formulario',[\App\Http\Controllers\HomeController::class,'form'])->name('formulario');
