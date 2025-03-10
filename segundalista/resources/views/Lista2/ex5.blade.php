@extends('layout')

@section('conteudo')

<form method="post" action="/lista2ex5">

    @csrf
                        
    <div class="mb-3">
        <label for="mes" class="form-label">Informe o número do mês (1-12):</label>
        <input type="number" id="mes" name="mes" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Exibir mês</button>
</form>

    @isset($nomeMes)
        <p>O mês referente ao número {{ $mes }} é: {{ $nomeMes }}</p>
    @endisset

@endsection