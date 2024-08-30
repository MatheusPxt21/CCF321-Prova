@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Municípios</h1>
        <a href="{{ route('municipios.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Município</a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Estado</th>
                <th>Sigla do Estado</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($municipios as $municipio)
                <tr>
                    <td>{{ $municipio->nome }}</td>
                    <td>{{ $municipio->estado->nome }}</td>
                    <td>{{ $municipio->estado->sigla }}</td>
                    <td>
                        <form action="{{ route('municipios.destroy', $municipio->id) }}" method="POST">
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
