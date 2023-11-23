<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;

use Illuminate\Support\Facades\Route;



Route::post('cadastrar/Servico', [ServicoController::class, 'store']);

Route::get(
    'find/servico/{id}',
    [ServicoController::class, 'pesquisarPorId']
);  

Route::get('find/servico/cpf/{cpf}', [ServicoController::class, 'pesquisarPorCpf']);
Route::get('all/servico', [ServicoController::class, 'retornarTodos']);

Route::post('nome/servico', [ServicoController::class, 'pesquisarPorNome']);


Route::delete('delete/servico/{id}', [ServicoController::class, 'excluir']);

Route::put('update/servico', [ServicoController::class, 'update']);

//------------------------------------------------------------------------------CLIENTES--------------------------------------------------------------------------------//




Route::post('cadastrar/Cliente', [ClienteController::class, 'cadastrarCliente']); //Cadastrar

Route::get('all/Cliente', [ClienteController::class, 'retornarTodosClientes']); //vizualizar

Route::post('nome/Cliente', [ClienteController::class, 'pesquisarClientePorNome']);
Route::get('cpf/Cliente', [ClienteController::class, 'pesquisarClientePorCpf']);
Route::get('celular/Cliente', [ClienteController::class, 'pesquisarClientePorCelular']);
Route::get('email/Cliente', [ClienteController::class, 'pesquisarClientePorEmail']);
Route::get(
    'find/Cliente/{id}',
    [ClienteController::class, 'pesquisarPorId']
);
Route::put ('recuperar/senha/Cliente', [ClienteController::class, 'recuperarSenha']);
Route::get('exportar/csv/cliente', [ClienteController::class, 'exportarCsvCliente']);


Route::put('update/Cliente', [ClienteController::class, 'editarCliente']); //atualizar e editar

Route::delete('excluir/cliente/{id}', [ClienteController::class, 'excluirCliente']); //excluir



//------------------------------------------------------------------------------PROFISSIONAL--------------------------------------------------------------------------------//

Route::post('cadastrar/Profissional', [ProfissionalController::class, 'storeProfissional']); //Cadastrar

Route::get('all/Profissional', [ProfissionalController::class, 'retornarTodosProfissionais']); //vizualizar

Route::post('nome/Profissional', [ProfissionalController::class, 'pesquisarPorNomeProfissional']);
Route::post('cpf/Profissional/{cpf}', [ProfissionalController::class, 'pesquisarPorCpfProfissional']);
Route::post('celular/Profissional', [ProfissionalController::class, 'pesquisarPorCelularProfissional']);
Route::post('email/Profissional', [ProfissionalController::class, 'pesquisarPorEmailProfissional']);
Route::get(
    'find/profissional/{id}',
    [ProfissionalController::class, 'pesquisarPorId']
);
Route::put ('recuperar/senha/profissional', [ProfissionalController::class, 'recuperarSenha']);

Route::put('update/Profissional', [ProfissionalController::class, 'updateProfissional']); //atualizar e editar

Route::delete('delete/Profissional/{id}', [ProfissionalController::class, 'excluirProfissional']); //excluir




Route::post('cadastrar/agenda', [AgendaController::class, 'cadastroAgenda']); //Cadastrar

Route::get('all/Agenda', [AgendaController::class, 'retornarTodosAgendas']); //vizualizar

Route::post('nome/Agenda', [AgendaController::class, 'pesquisarPorNomeAgenda']); //


Route::put('update/Agenda', [AgendaController::class, 'updateAgenda']); //atualizar e editar

Route::delete('delete/Agenda/{id}', [AgendaController::class, 'excluirAgenda']); //excluir


Route::post('Agenda/pesquisar', [AgendaController::class, 'pesquisarPorData']);
