<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\ServicoController;
use Illuminate\Support\Facades\Route;




//------------------------------------------------------Salvar-------------------------------------------------

Route::post('cadastrar/servico', [ServicoController::class, 'cadastrarServico']);

Route::post('cadastrar/cliente', [ClienteController::class, 'cadastrarCliente']); 

Route::post('cadastrar/profissional', [ProfissionalController::class, 'cadastrarProfissional']);

Route::post('cadastrar/agenda', [AgendaController::class, 'cadastroAgenda']);

//-------------------------------------------------------------------------------------------------------------




//-------------------------------------------------Atualizar---------------------------------------------------

Route::put('update/cliente', [ClienteController::class, 'editarCliente']);

Route::put('update/profissional', [ProfissionalController::class, 'editarProfissional']);

Route::put('update/servico', [ServicoController::class, 'editarServico']);

Route::put('update/agenda', [AgendaController::class, 'editarAgenda']);

//--------------------------------------------------------------------------------------------------------------




//-----------------------------------------------Vizualizar-----------------------------------------------------

Route::get('all/cliente', [ClienteController::class, 'retornarTodosClientes']);

Route::get('all/profissional', [ProfissionalController::class, 'retornarTodosProfissionais']);

Route::get('all/servico', [ServicoController::class, 'retornarTodosServicos']);

Route::get('all/agenda', [AgendaController::class, 'retornarTodosAgenda']);

//--------------------------------------------------------------------------------------------------------------




//--------------------------------------------------Excluir-----------------------------------------------------

Route::delete('excluir/cliente/{id}', [ClienteController::class, 'excluirCliente']);

Route::delete('excluir/profissional/{id}', [ProfissionalController::class, 'excluirProfissional']);

Route::delete('excluir/servico/{id}', [ServicoController::class, 'excluirServico']);

Route::delete('excluir/agenda/{id}', [AgendaController::class, 'excluirAgenda']);

//--------------------------------------------------------------------------------------------------------------




//--------------------------------------------Pesquisas-Cliente-------------------------------------------------

Route::post('nome/cliente', [ClienteController::class, 'pesquisarClientePorNome']);

Route::get('cpf/cliente', [ClienteController::class, 'pesquisarClientePorCpf']);

Route::get('celular/cliente', [ClienteController::class, 'pesquisarClientePorCelular']);

Route::get('email/cliente', [ClienteController::class, 'pesquisarClientePorEmail']);

Route::get('find/cliente/{id}',[ClienteController::class, 'pesquisarPorId']);

//--------------------------------------------------------------------------------------------------------------




//------------------------------------------Pesquisas-Profissionais---------------------------------------------

Route::post('nome/profissional', [ProfissionalController::class, 'pesquisarPorNomeProfissional']);

Route::post('cpf/profissional/{cpf}', [ProfissionalController::class, 'pesquisarPorCpfProfissional']);

Route::post('celular/profissional', [ProfissionalController::class, 'pesquisarPorCelularProfissional']);

Route::post('email/profissional', [ProfissionalController::class, 'pesquisarPorEmailProfissional']);

Route::get('find/profissional/{id}',[ProfissionalController::class, 'pesquisarPorId']);

//--------------------------------------------------------------------------------------------------------------




//---------------------------------------------Pesquisas-Serviços----------------------------------------------

Route::get('find/servico/{id}',[ServicoController::class, 'pesquisarPorId']);  

Route::get('find/servico/cpf/{cpf}', [ServicoController::class, 'pesquisarPorCpf']);

Route::post('pesquisar/nome/servico', [ServicoController::class, 'pesquisarPorNome']);

Route::post('pesquisar/descricao/servico', [ServicoController::class, 'pesquisarPorDescricao']);

//-------------------------------------------------------------------------------------------------------------




//----------------------------------------------Pesquisas-Agenda-----------------------------------------------

Route::post('agenda/pesquisar/profissional', [AgendaController::class, 'pesquisarAgendaPorIdProfissional']); //

Route::get('find/agenda/{id}',[AgendaController::class, 'pesquisarPorId']);

Route::post('agenda/pesquisar/data', [AgendaController::class, 'pesquisarPorData']);

//-------------------------------------------------------------------------------------------------------------




//-----------------------------------------------Recuperar-senha-----------------------------------------------

Route::put ('recuperar/senha/cliente', [ClienteController::class, 'recuperarSenha']);

Route::put ('recuperar/senha/profissional', [ProfissionalController::class, 'recuperarSenha']);

//------------------------------------------------------------------------------------------------------------

