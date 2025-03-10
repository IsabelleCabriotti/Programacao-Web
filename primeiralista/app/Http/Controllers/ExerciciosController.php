<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    
    public function abrirFormExer1(){
        return view('exer1');
    }

    public function respostaExer1(Request $request){
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));
        $soma = $valor1 + $valor2;
        return view('exer1', compact('soma'));
    }

}
