@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex10">

    @csrf
                        
    <div class="mb-3">
        <label for="numero" class="form-label">Informe um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Gerar Tabuada</button>
</form>

    @isset($tabuada)
    <p>Tabuada do número {{ $numero }}:</p>
        <ul>
            @foreach($tabuada as $multiplicacao)
                <li>{{ $numero }} x {{ $multiplicacao['multiplicador'] }} = {{ $multiplicacao['resultado'] }}</li>
            @endforeach
        </ul>
    @endisset

@endsection