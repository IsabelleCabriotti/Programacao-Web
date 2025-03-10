@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex3">

    @csrf
                        
    <div class="mb-3">
        <label for="valor" class="form-label">Informe o valor do produto (R$):</label>
        <input type="number" id="valor" name="valor" class="form-control" step="0.01" required="">
    </div>

    <button type="submit" class="btn btn-primary">Verificar Desconto</button>
</form>

    @isset($valor)
        <p>Valor do produto: R${{ $valor, 2 }}</p>
    @endisset

    @isset($desconto)
        <p>Valor do desconto: R${{ $desconto, 2 }}</p>
    @endisset

    @isset($novoValor)
        <p>Valor do produto com desconto: R${{ $novoValor, 2 }}</p>
    @endisset

    @isset($valorProd)
        <p>Valor do produto menor que R$100,00: R${{ $valorProd, 2 }}</p>
    @endisset

@endsection