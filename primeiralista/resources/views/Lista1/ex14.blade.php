@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex14">

    @csrf
                        
    <div class="mb-3">
        <label for="capital" class="form-label">Informe o capital (R$): </label>
        <input type="number" id="capital" name="capital" step="0.1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Informe a taxa de juros (%): </label>
        <input type="number" id="taxa" name="taxa" step="0.1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Informe o periodo (meses): </label>
        <input type="number" id="periodo" name="periodo" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular o montante com juros composto</button>
</form>

    @isset($juros)
        <p>O montante com juros composto é: {{ $juros }}</p>
    @endisset

@endsection