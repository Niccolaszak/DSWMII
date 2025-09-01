<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CepController;
use Illuminate\Http\Request;

Route::get('/cep/{cep}', [CepController::class, 'buscar']);