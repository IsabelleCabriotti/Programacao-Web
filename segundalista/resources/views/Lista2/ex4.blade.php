@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex4">

    @csrf
                        
    <div class="mb-3">
        <label for="valor" class="form-label">Informe o valor:</label>
        <input type="number" id="valor" name="valor" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

    @isset($primos)
        <p>Números primos de 1 até {{ $valor }}:</p>
        <ul>
            @foreach($primos as $primo)
                <li>{{ $primo }}</li>
            @endforeach
        </ul>
    @endisset

@endsection