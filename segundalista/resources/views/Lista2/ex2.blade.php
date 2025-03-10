@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex2">

    @csrf
                        
    <div class="mb-3">
        <label for="valorA" class="form-label">Informe o valor A:</label>
        <input type="number" id="valorA" name="valorA" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valorB" class="form-label">Informe o valor B:</label>
        <input type="number" id="valorB" name="valorB" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($iguais)
        <p>Números iguais: {{ $iguais }}</p>
    @endisset

    @isset($crescente)
        <p>Ordem crescente: {{ $crescente }}</p>
    @endisset

    @isset($crescente2)
        <p>Ordem crescente: {{ $crescente2 }}</p>
    @endisset

@endsection