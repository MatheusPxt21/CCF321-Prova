@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Estados</h1>
        <a href="{{ route('estados.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Estado</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($estados as $estado)
                <tr>
                    <td>{{ $estado->nome }}</td>
                    <td>{{ $estado->sigla }}</td>
                    <td>
                        <form action="{{ route('estados.destroy', $estado->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
