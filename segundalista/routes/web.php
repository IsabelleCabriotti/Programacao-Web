<?php

use App\Http\Controllers\Lista2Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex1', [Lista2Controller::class, 'abrirFormEx1']);

Route::post('/lista2ex1', [Lista2Controller::class, 'respostaEx1']);

Route::get('/ex2', [Lista2Controller::class, 'abrirFormEx2']);

Route::post('/lista2ex2', [Lista2Controller::class, 'respostaEx2']);

Route::get('/ex3', [Lista2Controller::class, 'abrirFormEx3']);

Route::post('/lista2ex3', [Lista2Controller::class, 'respostaEx3']);

Route::get('/ex4', [Lista2Controller::class, 'abrirFormEx4']);

Route::post('/lista2ex4', [Lista2Controller::class, 'respostaEx4']);

Route::get('/ex5', [Lista2Controller::class, 'abrirFormEx5']);

Route::post('/lista2ex5', [Lista2Controller::class, 'respostaEx5']);

Route::get('/ex6', [Lista2Controller::class, 'abrirFormEx6']);

Route::post('/lista2ex6', [Lista2Controller::class, 'respostaEx6']);

Route::get('/ex7', [Lista2Controller::class, 'abrirFormEx7']);

Route::post('/lista2ex7', [Lista2Controller::class, 'respostaEx7']);

Route::get('/ex8', [Lista2Controller::class, 'abrirFormEx8']);

Route::post('/lista2ex8', [Lista2Controller::class, 'respostaEx8']);

Route::get('/ex9', [Lista2Controller::class, 'abrirFormEx9']);

Route::post('/lista2ex9', [Lista2Controller::class, 'respostaEx9']);

Route::get('/ex10', [Lista2Controller::class, 'abrirFormEx10']);

Route::post('/lista2ex10', [Lista2Controller::class, 'respostaEx10']);
