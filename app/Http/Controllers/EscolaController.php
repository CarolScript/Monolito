<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Escola;

use Illuminate\Http\Request;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $escolas = Escola::all(); // Para popular o dropdown de escolas
        return Inertia::render('Alunos/Create', [
            'escolas' => $escolas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validação
    $request->validate([
        'nome' => 'required|string|max:255',
        'endereco' => 'nullable|string|max:255',
    ]);

    // Criar uma nova escola
    Escola::create([
        'nome' => $request->nome,
        'endereco' => $request->endereco,
    ]);

    // Redirecionar após o cadastro
    return redirect()->route('escolas.index')->with('success', 'Escola adicionada com sucesso!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
