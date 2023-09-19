<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('store', [ServicoController::class, 'store']);

Route::get(
    'find/{id}',
    [ServicoController::class, 'pesquisarPorId']
);

Route::get('find/cpf/{cpf}', [ServicoController::class, 'pesquisarPorCpf']);
Route::get('all', [ServicoController::class, 'retornarTodos']);

Route::post('nome', [ServicoController::class, 'pesquisarPorNome']);


Route::delete('delete/{id}', [ServicoController::class, 'excluir']);

Route::put('update', [ServicoController::class, 'update']);

//------------------------------------------------------------------------------CLIENTES--------------------------------------------------------------------------------//

Route::post('store/Cliente', [ClienteController::class, 'storeCliente']); //Cadastrar

Route::get('all/Cliente', [ClienteController::class, 'retornarTodosClientes']); //vizualizar

Route::post('nome/Cliente', [ClienteController::class, 'pesquisarClientePorNome']);
Route::post('cpf/Cliente/{cpf}', [ClienteController::class, 'pesquisarClientePorCpf']);
Route::post('celular/Cliente', [ClienteController::class, 'pesquisarClientePorCelular']);
Route::post('email/Cliente', [ClienteController::class, 'pesquisarClientePorEmail']);


Route::put('update/Cliente', [ClienteController::class, 'updateCliente']); //atualizar e editar

Route::delete('delete/Cliente/{id}', [ClienteController::class, 'excluirCliente']); //excluir
