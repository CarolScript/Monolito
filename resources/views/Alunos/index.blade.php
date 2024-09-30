@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Alunos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Escola</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
                <td>{{ $aluno->nome }}</td>
                <td>{{ $aluno->idade }}</td>
                <td>{{ $aluno->escola->nome }}</td>
                <td>
                    <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
