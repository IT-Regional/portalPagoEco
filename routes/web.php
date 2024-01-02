<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/* Route::get('/', function () {
    return view('login');
}); */

Route::get('/', [HomeController::class, 'login'])->name('login');
Route::get('/inicio', [HomeController::class, 'inicio'])->name('inicio');
Route::get('/perfil', [HomeController::class, 'miPerfil'])->name('perfil');
Route::get('/facturas', [HomeController::class, 'misFacturas'])->name('facturas');