@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex2">

    @csrf
                        
    <div class="mb-3">
        <label for="fahrenheit" class="form-label">Informe a temperatura em Fahrenheit: </label>
        <input type="number" id="fahrenheit" step="0.1" name="fahrenheit" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Converter para Celsius</button>
</form>

    @isset($celsius)
        <p>A temperatura em Celsius é: {{ $celsius }}</p>
    @endisset

@endsection