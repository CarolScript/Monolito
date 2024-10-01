<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno; // Seu modelo de Aluno



class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        // Validação
     // Valida os dados do formulário
     /*$request->validate([
        'name' => 'required|String|max:255',
       // 'email' => 'required|email|unique:alunos,email',
        'data_nascimento'=> 'required|date',
        'password'=> 'required|text',
    ]);*/

    // Cria um novo aluno
    Aluno::create($request-> all());

      


    // Redireciona para a lista de alunos
    return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }


    public function index()
    {
       
        return view('alunos');
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealunoRequest $request, aluno $aluno)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aluno $aluno)
    {
       
    }
}
