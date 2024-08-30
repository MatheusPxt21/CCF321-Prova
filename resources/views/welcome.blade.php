@extends('layouts.app')

@section('content')
    <div>
        <h1>Controle de Estados:</h1>
        <a href="{{ route('estados.index') }}" class="btn btn-primary mb-3">Gestão de Estados</a>
    </div>
    <div>
        <h1>Controle de Municípios:</h1>
        <a href="{{ route('municipios.index') }}" class="btn btn-primary mb-3">Gestão de Municípios</a>
    </div>
@endsection

