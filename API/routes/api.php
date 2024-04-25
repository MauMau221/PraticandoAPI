<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\CalculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produtos', [ProdutosController::class, "index"]);
Route::post('/produtos', [ProdutosController::class, "store"]);
Route::put('/produtos/{id}', [ProdutosController::class, "update"]);
Route::delete('/produtos/{id}', [ProdutosController::class, "delete"]);

// Calculadora 
Route::post('/calcular/somar', [CalculoController::class, "adicao"]);
Route::post('/calcular/subtrair', [CalculoController::class, "subtracao"]);
Route::post('/calcular/dividir', [CalculoController::class, "divisao"]);
Route::post('/calcular/multiplicar', [CalculoController::class, "multiplicacao"]);