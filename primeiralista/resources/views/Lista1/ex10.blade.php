@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex10">

    @csrf
                        
    <div class="mb-3">
        <label for="quilometros" class="form-label">Informe os quilômetros: </label>
        <input type="number" id="quilometros" name="quilometros" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular para milhas</button>
</form>

    @isset($milhas)
        <p>O resultado do quilômetros em milhas é: {{ $milhas }}</p>
    @endisset

@endsection