@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex12">

    @csrf
                        
    <div class="mb-3">
        <label for="preco" class="form-label">Informe o preço (R$): </label>
        <input type="number" id="preco" name="preco" step="0.1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="desconto" class="form-label">Informe o porcentual de desconto (%): </label>
        <input type="number" id="desconto" name="desconto" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular o preço com desconto</button>
</form>

    @isset($preco_final)
        <p>O preço com desconto é: {{ $preco_final }}</p>
    @endisset

@endsection