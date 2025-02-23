@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex9">

    @csrf
                        
    <div class="mb-3">
        <label for="metros" class="form-label">Informe o valor em metros: </label>
        <input type="number" id="metros" name="metros" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular para centímetros</button>
</form>

    @isset($centimetros)
        <p>O resultado de metros para centímetros é: {{ $centimetros }}</p>
    @endisset

@endsection