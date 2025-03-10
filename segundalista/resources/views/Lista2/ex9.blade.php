@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex9">

    @csrf
                        
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular Fatorial</button>
</form>

    @isset($fatorial)
    <p>O fatorial de {{ $numero }} é: {{ $fatorial }}</p>
    @endisset

@endsection