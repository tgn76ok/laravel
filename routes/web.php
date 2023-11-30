<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/Produtos',[ProdutoController::class,'index'])->name('produtos.index');
Route::get('/Produtos/create',[ProdutoController::class,'create'])->name('produtos.create');
Route::post('/Produtos',[ProdutoController::class,'store'])->name('produtos.store');
Route::get('/Produtos/{produto}',[ProdutoController::class,'show'])->name('produtos.show');
Route::get('/Produtos/{produto}/edit',[ProdutoController::class,'edit'])->name('produtos.edit');
Route::put('/Produtos/{produto}',[ProdutoController::class,'update'])->name('produtos.update');
Route::delete('/Produtos/{produto}',[ProdutoController::class,'destroy'])->name('produtos.destroy');

