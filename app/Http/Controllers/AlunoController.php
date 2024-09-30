<?php

namespace App\Http\Controllers;
use App\Models\escola;
use Inertia\Inertia;
use App\Models\aluno;
use App\Http\Requests\StorealunoRequest;
use App\Http\Requests\UpdatealunoRequest;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        return Inertia::render('Alunos/Index', [
            'alunos' => $alunos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação
     // Valida os dados do formulário
     $request->validate([
        'nome' => 'required|string|max:255',
        'idade' => 'required|integer|min:1',
    ]);

    // Cria um novo aluno
    Aluno::create([
        'nome' => $request->nome,
        'idade' => $request->idade,
    ]);

    // Redireciona para a lista de alunos
    return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aluno $aluno)
    {
        $aluno = Aluno::find($id);
        $escolas = Escola::all(); // Para editar a escola do aluno
        return view('alunos.edit', compact('aluno', 'escolas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealunoRequest $request, aluno $aluno)
    {
        $aluno = Aluno::find($id);
        $aluno->nome = $request->nome;
        $aluno->idade = $request->idade;
        $aluno->escola_id = $request->escola_id;
        $aluno->save();

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aluno $aluno)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        
        return redirect()->route('alunos.index');
    }
}
