@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex7">

    @csrf
                        
    <div class="mb-3">
        <label for="raio" class="form-label">Informe o raio do circulo: </label>
        <input type="number" id="raio" name="raio" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular o perímetro</button>
</form>

    @isset($perimetro)
        <p>O perímetro total do circulo é: {{ $perimetro }}</p>
    @endisset

@endsection