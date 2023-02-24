<?php

use App\Http\Livewire\Contador;
use App\Http\Livewire\UserIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AmiiboController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductosController;


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


Route::get('/login', [LoginController::class,'showLogin']);
Route::post('/loginApi', [LoginController::class,'loginApi'])->name('loginApi');
Route::get('/usuarios',[UsuarioController::class,'index']);
Route::get('/productos',[ProductosController::class,'index']);
Route::get('/amiibo',[AmiiboController::class,'index']);
Route::get('/asset',[AssetController::class,'show']);
Route::get('/contador',Contador::class);
Route::get('/usuarios',UserIndex::class);