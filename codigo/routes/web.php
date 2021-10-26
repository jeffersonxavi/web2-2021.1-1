<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensEntradaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensVendaController;
use App\Models\Cliente;
use App\Models\Fornecedor;
use App\Models\Contato;
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

Route::get('/clientes', [ClienteController::class, 'show']);

Route::get('/fornecedores/show', [FornecedorController::class, 'show']);

Route::get('/fornecedores/index', [FornecedorController::class, 'index']);
Route::get('/fornecedores/create', [FornecedorController::class, 'create']);
Route::post('/fornecedores/store', [FornecedorController::class, 'store']);
Route::get('/fornecedores/edit/{id}', [FornecedorController::class, 'edit'])->name('edit');
Route::put('/fornecedores/update/{id}', [FornecedorController::class, 'update'])->name('update');
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy'])->name('delete');


Route::get('/fornecedores/showcontato', [FornecedorController::class, 'show'])->name('showcontato');
Route::get('/contato/create/{id}', [ContatoController::class, 'create'])->name('contatocreate');
Route::post('/contato/store', [ContatoController::class, 'store'])->name('contatostore');

Route::get('/produtos/index', [ProdutoController::class, 'index']);
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos/store', [ProdutoController::class, 'store']);
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('edit');
Route::put('/produtos/update/{id}', [ProdutoController::class, 'update'])->name('update');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('delete');

Route::get('/entradas/index', [EntradaController::class, 'index']);
Route::get('/entradas/create', [EntradaController::class, 'create']);
Route::post('/entradas/store', [EntradaController::class, 'store']);
Route::get('/entradas/edit/{id}', [EntradaController::class, 'edit'])->name('edit');
Route::put('/entradas/update/{id}', [EntradaController::class, 'update'])->name('update');
Route::delete('/entradas/{id}', [EntradaController::class, 'destroy'])->name('delete');

Route::get('/itensentradas/index', [ItensEntradaController::class, 'index']);
Route::get('/itensentradas/create', [ItensEntradaController::class, 'create']);
Route::post('/itensentradas/store', [ItensEntradaController::class, 'store']);
Route::get('/itensentradas/edit/{id}', [ItensEntradaController::class, 'edit'])->name('edit');
Route::put('/itensentradas/update/{id}', [ItensEntradaController::class, 'update'])->name('update');
Route::delete('/itensentradas/{id}', [ItensEntradaController::class, 'destroy'])->name('delete');

Route::get('/vendas/index', [VendaController::class, 'index']);
Route::get('/vendas/create', [VendaController::class, 'create']);
Route::post('/vendas/store', [VendaController::class, 'store']);
Route::get('/vendas/edit/{id}', [VendaController::class, 'edit'])->name('edit');
Route::put('/vendas/update/{id}', [VendaController::class, 'update'])->name('update');
Route::delete('/vendas/{id}', [VendaController::class, 'destroy'])->name('delete');

Route::get('/itensvendas/index', [ItensVendaController::class, 'index']);
Route::get('/itensvendas/create', [ItensVendaController::class, 'create']);
Route::post('/itensvendas/store', [ItensVendaController::class, 'store']);
Route::get('/itensvendas/edit/{id}', [ItensVendaController::class, 'edit'])->name('edit');
Route::put('/itensvendas/update/{id}', [ItensVendaController::class, 'update'])->name('update');
Route::delete('/itensvendas/{id}', [ItensVendaController::class, 'destroy'])->name('delete');

