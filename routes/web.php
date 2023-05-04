<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;//precisa do import


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo',[ProdutosController::class, 'create']);//direcionando esse link para o controller ProdutosController com o método create
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');