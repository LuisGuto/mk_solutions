<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;






Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Adicionar o midleware auth às demais rotas no web.php
Route::group(['middleware' => ['auth']], function () {

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/usuarios', [UsuariosController::class, 'lista']);
Route::get('/clientes', [ClientesController::class, 'lista']);
Route::get('/produtos', [ProdutoController::class, 'lista']);
Route::get('/usuarios-add', [UsuariosController::class, 'add']);
Route::get('/clientes-add', [ClientesController::class, 'add']);
Route::get('/produtos-add', [ProdutoController::class, 'add']);



});
