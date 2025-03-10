@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex6">

    @csrf
                        
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($numero)
    <p>Números de 1 até {{ $numero }}:</p>
        <ul>
            @foreach($numeros as $i)
                <li>{{ $i }}</li>
            @endforeach
        </ul>
    @endisset

@endsection