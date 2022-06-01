<?php

use App\Http\Controllers\AtendentesController;
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
Route::get('/produtos-add', [ProdutoController::class, 'add']);

Route::get('/atendentes', [AtendentesController::class, 'lista']);
Route::get('/atendentes-add', [AtendentesController::class, 'add']);
Route::get('/atendentes-edit/{id}', [AtendentesController::class, 'edit']);
Route::post('/atendentes-save/{id?}', [AtendentesController::class, 'save']);
Route::get('/atendentes-delete/{id}', [AtendentesController::class, 'delete']);

Route::get('/clientes', [AtendentesController::class, 'lista']);
Route::get('/clientes-add', [AtendentesController::class, 'add']);
Route::get('/clientes-edit/{id}', [AtendentesController::class, 'edit']);
Route::post('/clientes-save/{id?}', [AtendentesController::class, 'save']);
Route::get('/clientes-delete/{id}', [AtendentesController::class, 'delete']);





});
