<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ItensEntradaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ItensVendaController;
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
    return view('layouts.main');
});

Route::get('/clientes', [ClienteController::class, 'show']);

Route::get('/fornecedores/show', [FornecedorController::class, 'show']);

//Cliente
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('cliente.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('cliente.create');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/clientes/show/{id}', [ClienteController::class, 'show'])->name('cliente.show');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

//Fornecedor
Route::get('/fornecedores/index', [FornecedorController::class, 'index'])->name('fornecedor.create');
Route::get('/fornecedores/create', [FornecedorController::class, 'create'])->name('fornecedor.create');
Route::post('/fornecedores/store', [FornecedorController::class, 'store'])->name('fornecedor.store');
Route::get('/fornecedores/show/{id}', [FornecedorController::class, 'show'])->name('fornecedor.show');
Route::get('/fornecedores/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
Route::put('/fornecedores/update/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.delete');

//Contato (mesma coisa feito em endereço só que fiz pra contato)
Route::get('/contatos/index', [ContatoController::class, 'index'])->name('contato.index');
Route::get('/contatos/create', [ContatoController::class, 'create'])->name('contato.create');
Route::post('/contatos/store', [ContatoController::class, 'store'])->name('contato.store');
Route::get('/contatos/show/{id}', [ContatoController::class, 'show'])->name('contato.show');
Route::get('/contatos/edit/{id}', [ContatoController::class, 'edit'])->name('contato.edit');
Route::put('/contatos/update/{id}', [ContatoController::class, 'update'])->name('contato.update');
Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->name('contato.destroy');
Route::get('/fornecedores/showcontato', [FornecedorController::class, 'show'])->name('showcontato');
Route::get('/contatos/create/{id}', [ContatoController::class, 'create'])->name('contatocreate');
Route::post('/contatos/store', [ContatoController::class, 'store'])->name('contatostore');

//Produto
Route::get('/produtos/index', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produtos/store', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/produtos/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produtos/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');

//Entrada
Route::get('/entradas/index', [EntradaController::class, 'index'])->name('entrada.index');
Route::get('/entradas/create', [EntradaController::class, 'create'])->name('entrada.create');
Route::post('/entradas/store', [EntradaController::class, 'store'])->name('entrada.store');
Route::get('/entradas/show/{id}', [EntradaController::class, 'show'])->name('entrada.show');
Route::get('/entradas/edit/{id}', [EntradaController::class, 'edit'])->name('entrada.edit');
Route::put('/entradas/update/{id}', [EntradaController::class, 'update'])->name('entrada.update');
Route::delete('/entradas/{id}', [EntradaController::class, 'destroy'])->name('entrada.delete');

//ItensEntrada
Route::get('/itensentradas/index', [ItensEntradaController::class, 'index'])->name('itensentrada.index');
Route::get('/itensentradas/create', [ItensEntradaController::class, 'create'])->name('itensentrada.create');
Route::post('/itensentradas/store', [ItensEntradaController::class, 'store'])->name('itensentrada.store');
Route::get('/itensentradas/show/{id}', [ItensEntradaController::class, 'show'])->name('itensentrada.show');
Route::get('/itensentradas/edit/{id}', [ItensEntradaController::class, 'edit'])->name('itensentrada.edit');
Route::put('/itensentradas/update/{id}', [ItensEntradaController::class, 'update'])->name('itensentrada.update');
Route::delete('/itensentradas/{id}', [ItensEntradaController::class, 'destroy'])->name('itensentrada.delete');

//Venda
Route::get('/vendas/index', [VendaController::class, 'index'])->name('venda.edit');
Route::get('/vendas/create', [VendaController::class, 'create'])->name('venda.edit');
Route::post('/vendas/store', [VendaController::class, 'store'])->name('venda.edit');
Route::get('/vendas/show/{id}', [VendaController::class, 'show'])->name('venda.show');
Route::get('/vendas/edit/{id}', [VendaController::class, 'edit'])->name('venda.edit');
Route::put('/vendas/update/{id}', [VendaController::class, 'update'])->name('venda.update');
Route::delete('/vendas/{id}', [VendaController::class, 'destroy'])->name('venda.delete');

//ItensVenda
Route::get('/itensvendas/index', [ItensVendaController::class, 'index'])->name('itensvenda.index');
Route::get('/itensvendas/create', [ItensVendaController::class, 'create'])->name('itensvenda.create');
Route::post('/itensvendas/store', [ItensVendaController::class, 'store'])->name('itensvenda.store');
Route::get('/itensvendas/show/{id}', [ItensVendaController::class, 'show'])->name('itensvenda.show');
Route::get('/itensvendas/edit/{id}', [ItensVendaController::class, 'edit'])->name('itensvenda.edit');
Route::put('/itensvendas/update/{id}', [ItensVendaController::class, 'update'])->name('itensvenda.update');
Route::delete('/itensvendas/{id}', [ItensVendaController::class, 'destroy'])->name('itensvenda.delete');

