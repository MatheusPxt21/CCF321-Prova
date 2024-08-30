@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Novo Estado</h1>
        <form action="{{ route('estados.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" maxlength="30" required>
            </div>
            <div class="form-group">
                <label for="sigla">Sigla:</label>
                <input type="text" name="sigla" id="sigla" class="form-control" maxlength="2" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
@endsection
