<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista2Controller extends Controller
{
    public function abrirFormEx1(){
        return view('lista2.ex1');
    }

    public function respostaEx1(Request $request){
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));
        $soma = $valor1 + $valor2;
        if($valor1 == $valor2)
        {
            $resultado = $soma * 3;
        }
        return view('lista2.ex1', compact('soma', 'resultado'));
    }

    public function abrirFormEx2(){
        return view('lista2.ex2');
    }

    public function respostaEx2(Request $request){
        $valorA = intval($request->input('valorA'));
        $valorB = intval($request->input('valorB'));
        $iguais = null;
        $crescente = null;
        $crescente2 = null;

        if($valorA == $valorB)
        {
            $iguais = $valorA;
        }
        else{
            if($valorA < $valorB)
            {
                $crescente = $valorA .' '. $valorB;
            }
            else{
                $crescente2 = $valorB .' '. $valorA;
            }
        }
        return view('lista2.ex2', compact('iguais', 'crescente', 'crescente2'));
    }

    public function abrirFormEx3(){
        return view('lista2.ex3');
    }

    public function respostaEx3(Request $request){
        $valor = floatval($request->input('valor'));
        $desconto = null;
        $novoValor = null;
        $valorProd = null;

        if($valor >= 100.00)
        {
            $desconto = $valor * 0.15;
            $novoValor = $valor - $desconto;
        }
        else{
            $valorProd = $valor;
        }
        return view('lista2.ex3', compact('valor', 'desconto', 'novoValor', 'valorProd'));
    }

    public function abrirFormEx4(){
        return view('lista2.ex4');
    }

    public function respostaEx4(Request $request){
        $valor = intval($request->input('valor'));
        $primos = [];

        function ePrimo($valor) {
            if ($valor < 2) return false;
            for ($i = 2; $i <= sqrt($valor); $i++) {
                if ($valor % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        for ($i = 1; $i <= $valor; $i++) {
            if (ePrimo($i)) {
                $primos[$i-1] = $i;
            }
        }
        return view('lista2.ex4', compact('valor','primos'));
    }

    public function abrirFormEx5(){
        return view('lista2.ex5');
    }

    public function respostaEx5(Request $request){
        $mes = intval($request->input('mes'));
        $nomeMes = '';

        switch ($mes)
            {
            case 1:
                $nomeMes = "Janeiro";
                break;
            case 2:
                $nomeMes = "Fevereiro";
                break;
            case 3:
                $nomeMes = "Março";
                break;
            case 4:
                $nomeMes = "Abril";
                break;
            case 5:
                $nomeMes = "Maio";
                break;
            case 6:
                $nomeMes = "Junho";
                break;
            case 7:
                $nomeMes = "Julho";
                break;
            case 8:
                $nomeMes = "Agosto";
                break;
            case 9:
                $nomeMes = "Setembro";
                break;
            case 10:
                $nomeMes = "Outubro";
                break;
            case 11:
                $nomeMes = "Novembro";
                break;
            case 12:
                $nomeMes = "Dezembro";
                break;
            default:
                $nomeMes = "Mês informado não existe!";
            }
        return view('lista2.ex5', compact('mes', 'nomeMes'));
    }

    public function abrirFormEx6(){
        return view('lista2.ex6');
    }

    public function respostaEx6(Request $request){
        $numero = intval($request->input('numero'));
        $numeros = [];
        if($numero >= 1)
        {
            for ($i = 1; $i <= $numero; $i ++) {
                $numeros[] = $i;
            }
        }
        return view('lista2.ex6', compact('numero', 'numeros'));
    }

    public function abrirFormEx7(){
        return view('lista2.ex7');
    }

    public function respostaEx7(Request $request){
        $numero = intval($request->input('numero'));
        $soma = 0;
        $contador = 1;

        while ($contador <= $numero)
        {
            $soma += $contador;
            $contador ++;
        }
        return view('lista2.ex7', compact('numero', 'soma'));
    }

    public function abrirFormEx8(){
        return view('lista2.ex8');
    }

    public function respostaEx8(Request $request){
        $numero = intval($request->input('numero'));
        $numeros = [];
        do
        {
            $numeros [] = $numero;
            $numero --;
        }
        while($numero >= 1);
        return view('lista2.ex8', compact('numeros'));
    }

    public function abrirFormEx9(){
        return view('lista2.ex9');
    }

    public function respostaEx9(Request $request){
        $numero = intval($request->input('numero'));
        $fatorial = 1;
        if ($numero >= 0)
        {
            for ($i = 1; $i <= $numero; $i++)
            {
                $fatorial *= $i;
            }
        }
        return view('lista2.ex9', compact('numero', 'fatorial'));
    }

    public function abrirFormEx10(){
        return view('lista2.ex10');
    }

    public function respostaEx10(Request $request){
        $numero = intval($request->input('numero'));
        $tabuada = [];
        for ($i = 1; $i <= 10; $i++)
        {
            $tabuada [] = [
            'multiplicador' => $i,
            'resultado' => $i * $numero
        ];
        }
        return view('lista2.ex10', compact('numero', 'tabuada'));
    }
}
