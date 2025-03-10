@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex7">

    @csrf
                        
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($numero)
    <p>A soma dos números de 1 até {{ $numero }} é: {{ $soma }}</p>
    @endisset

@endsection