@extends('layout')

@section('conteudo')
    
<form method="post" action="/listaex15">

    @csrf
                        
    <div class="mb-3">
        <label for="dias" class="form-label">Informe os dias: </label>
        <input type="number" id="dias" name="dias" step="0.1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Converter</button>
</form>

    @isset($dias, $horas, $minutos, $segundos)
        <p>{{ $dias }} dias é equivalente á: {{ $horas }} horas, {{ $minutos }} minutos e {{ $segundos }} segundos</p>
    @endisset

@endsection