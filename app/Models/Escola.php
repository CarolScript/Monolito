<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    // Relacionamento com alunos
    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    // Relacionamento com professores
    public function professores()
    {
        return $this->hasMany(Professor::class);
    }

    // Relacionamento com turmas
    public function turmas()
    {
        return $this->hasMany(Turma::class);
    }
}
