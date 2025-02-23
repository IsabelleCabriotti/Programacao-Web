@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex6">

    @csrf
                        
    <div class="mb-3">
        <label for="largura" class="form-label">Informe a largura do retângulo: </label>
        <input type="number" id="largura" name="largura" step="0.1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura do retângulo: </label>
        <input type="number" id="altura" name="altura" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular o perímetro</button>
</form>

    @isset($perimetro)
        <p>O perímetro total do retângulo é: {{ $perimetro }}</p>
    @endisset

@endsection