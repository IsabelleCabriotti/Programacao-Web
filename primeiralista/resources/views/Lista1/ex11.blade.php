@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex11">

    @csrf
                        
    <div class="mb-3">
        <label for="peso" class="form-label">Informe o peso (kg): </label>
        <input type="number" id="peso" name="peso" step="0.1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura (metros): </label>
        <input type="number" id="altura" name="altura" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular IMC</button>
</form>

    @isset($imc)
        <p>O IMC é: {{ $imc }}</p>
    @endisset

@endsection