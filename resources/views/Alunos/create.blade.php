@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Cadastrar Aluno</h1>
        
        <form action="{{ route('alunos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Aluno</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection
