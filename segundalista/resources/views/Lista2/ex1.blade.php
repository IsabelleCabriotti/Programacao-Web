@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex1">

    @csrf
                        
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o primeiro valor:</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o segundo valor:</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

    @isset($soma)
        <p>A soma dos valores é {{ $soma }}</p>
    @endisset

    @isset($resultado)
        <p>Os valores são iguais, o triplo da soma é igual à {{ $resultado }}</p>
    @endisset

@endsection