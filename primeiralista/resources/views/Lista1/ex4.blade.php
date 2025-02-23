@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex4">

    @csrf
                        
    <div class="mb-3">
        <label for="largura" class="form-label">Informe a largura do retângulo: </label>
        <input type="number" id="largura" name="largura" step="0.1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Informe a altura do retângulo: </label>
        <input type="number" id="altura" name="altura" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular a área</button>
</form>

    @isset($area)
        <p>A área total do retângulo é: {{ $area }}</p>
    @endisset

@endsection