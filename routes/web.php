<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlmoxarifadoController;
use App\Http\Controllers\CaixaController;
use App\Http\Controllers\DadosdaempresaController;
use App\Http\Controllers\DependenteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\ParametroController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
         return view('dashboard');
    })->name('dashboard');
});

//rotas almoxarifado
Route::get('/almoxarifado', [AlmoxarifadoController::class,'index']);
//rotas caixa
Route::get('/caixa', [CaixaController::class,'caixa']);
//rotas dados da empresa
Route::get('/dadosdaempresa', [DadosdaempresaController::class, 'index']);
//rotas ficha dependente
Route::get('/dependente/exibir', [DependenteController::class, 'index']);
//rotas ficha titular
Route::get('/fichas/cadastrar', [FichaController::class, 'fichaCadastrar']);//view de cadastro
Route::get('/fichas', [FichaController::class, 'fichas']);//exibir ficha buscada
Route::get('/fichas/exibir/{id}', [FichaController::class, 'fichaExibir']);//exibir ficha selecionada
Route::post('/fichas', [FichaController::class, 'store']);//salvar cadastro
Route::put('/fichas/update/{id}', [FichaController::class, 'update']);//alterando cadastro titular **
//rotas financeiro titular
Route::get('/financeiro/exibir/{id?}', [FinanceiroController::class, 'index']);
//rotas historico
Route::get('/historico/exibir/{id?}', [HistoricoController::class, 'index']);
//rotas documentos
Route::get('/documento/exibir/{id?}', [DocumentoController::class, 'index']);
//toras banco
//rotas categoria
//rotas estadocivil
//rotas moeda
//rotas tipoparente
//rotas parametros
Route::get('/parametros', [ ParametroController::class, 'index']);
Route::get('/usuarios', [ UserController::class, 'index']);
Route::get('/relatorio', function() { return view('relatorio'); });

/*
Route::resource('/clients', ClienteController::class);
clientes
clientes/create
clientes/1/edit
clientes/1/show
*/
