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
Route::prefix('clientes')->group(function () {
    Route::get('/index', [ClienteController::class, 'index'])->name('cliente.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/store', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('/show/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
});
//Fornecedor
Route::prefix('fornecedores')->group(function () {
    Route::get('/index', [FornecedorController::class, 'index'])->name('fornecedor.create');
    Route::get('/create', [FornecedorController::class, 'create'])->name('fornecedor.create');
    Route::post('/store', [FornecedorController::class, 'store'])->name('fornecedor.store');
    Route::get('/show/{id}', [FornecedorController::class, 'show'])->name('fornecedor.show');
    Route::get('/edit/{id}', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
    Route::put('/update/{id}', [FornecedorController::class, 'update'])->name('fornecedor.update');
    Route::delete('/{id}', [FornecedorController::class, 'destroy'])->name('fornecedor.delete');
});
//Contato (mesma coisa feito em endereço só que fiz pra contato)
Route::prefix('contatos')->group(function () {
    Route::get('/index', [ContatoController::class, 'index'])->name('contato.index');
    Route::get('/create', [ContatoController::class, 'create'])->name('contato.create');
    Route::post('/store', [ContatoController::class, 'store'])->name('contato.store');
    Route::get('/show/{id}', [ContatoController::class, 'show'])->name('contato.show');
    Route::get('/edit/{id}', [ContatoController::class, 'edit'])->name('contato.edit');
    Route::put('/update/{id}', [ContatoController::class, 'update'])->name('contato.update');
    Route::delete('//{id}', [ContatoController::class, 'destroy'])->name('contato.destroy');
    Route::get('/fornecedores/showcontato', [FornecedorController::class, 'show'])->name('showcontato');
    Route::get('/create/{id}', [ContatoController::class, 'create'])->name('contatocreate');
    Route::post('/store', [ContatoController::class, 'store'])->name('contatostore');
});

//Produto
Route::prefix('produtos')->group(function () {
    Route::get('/index', [ProdutoController::class, 'index'])->name('produto.index');
    Route::get('/create', [ProdutoController::class, 'create'])->name('produto.create');
    Route::post('/store', [ProdutoController::class, 'store'])->name('produto.store');
    Route::get('/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
    Route::get('/edit/{id}', [ProdutoController::class, 'edit'])->name('produto.edit');
    Route::put('/update/{id}', [ProdutoController::class, 'update'])->name('produto.update');
    Route::delete('/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');
});

//Entrada
Route::prefix('entradas')->group(function () {
    Route::get('/index', [EntradaController::class, 'index'])->name('entrada.index');
    Route::get('/create', [EntradaController::class, 'create'])->name('entrada.create');
    Route::post('/store', [EntradaController::class, 'store'])->name('entrada.store');
    Route::get('/show/{id}', [EntradaController::class, 'show'])->name('entrada.show');
    Route::get('/edit/{id}', [EntradaController::class, 'edit'])->name('entrada.edit');
    Route::put('/update/{id}', [EntradaController::class, 'update'])->name('entrada.update');
    Route::delete('/{id}', [EntradaController::class, 'destroy'])->name('entrada.destroy');
});

//ItensEntrada
Route::prefix('itensentradas')->group(function () {
    Route::get('/index', [ItensEntradaController::class, 'index'])->name('itensentrada.index');
    Route::get('/create', [ItensEntradaController::class, 'create'])->name('itensentrada.create');
    Route::post('/store', [ItensEntradaController::class, 'store'])->name('itensentrada.store');
    Route::get('/show/{id}', [ItensEntradaController::class, 'show'])->name('itensentrada.show');
    Route::get('/edit/{id}', [ItensEntradaController::class, 'edit'])->name('itensentrada.edit');
    Route::put('/update/{id}', [ItensEntradaController::class, 'update'])->name('itensentrada.update');
    Route::delete('/{id}', [ItensEntradaController::class, 'destroy'])->name('itensentrada.destroy');
});

//Venda
Route::prefix('vendas')->group(function () {
    Route::get('/index', [VendaController::class, 'index'])->name('venda.edit');
    Route::get('/create', [VendaController::class, 'create'])->name('venda.edit');
    Route::post('/store', [VendaController::class, 'store'])->name('venda.store');
    Route::get('/show/{id}', [VendaController::class, 'show'])->name('venda.show');
    Route::get('/edit/{id}', [VendaController::class, 'edit'])->name('venda.edit');
    Route::put('/update/{id}', [VendaController::class, 'update'])->name('venda.update');
    Route::delete('/{id}', [VendaController::class, 'destroy'])->name('venda.destroy');
});

//ItensVenda
Route::prefix('itensvendas')->group(function () {
    Route::get('/index', [ItensVendaController::class, 'index'])->name('itensvenda.index');
    Route::get('/create', [ItensVendaController::class, 'create'])->name('itensvenda.create');
    Route::post('/store', [ItensVendaController::class, 'store'])->name('itensvenda.store');
    Route::get('/show/{id}', [ItensVendaController::class, 'show'])->name('itensvenda.show');
    Route::get('/edit/{id}', [ItensVendaController::class, 'edit'])->name('itensvenda.edit');
    Route::put('/update/{id}', [ItensVendaController::class, 'update'])->name('itensvenda.update');
    Route::delete('/itensvendas/{id}', [ItensVendaController::class, 'destroy'])->name('itensvenda.destroy');
});

