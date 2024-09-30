@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Adicionar Nova Escola</h1>
    <form action="{{ route('escolas.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome da Escola:</label>
            <input type="text" name="nome" id="nome" class="mt-1 block w-full border border-gray-300 p-2 rounded" required>
        </div>

        <div>
            <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="mt-1 block w-full border border-gray-300 p-2 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Adicionar Escola</button>
    </form>
</div>
@endsection
