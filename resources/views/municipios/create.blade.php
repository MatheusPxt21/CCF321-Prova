@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Novo Município</h1>
        <form action="{{ route('municipios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" maxlength="30" required>
            </div>
            <div class="form-group">
                <label for="estado_id">Estado:</label>
                <select name="estado_id" id="estado_id" class="form-control" required>
                    @foreach($estados as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->nome }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
@endsection
