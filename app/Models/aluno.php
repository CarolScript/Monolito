<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email'];

    public function aluno()
    {
        return $this->belongsTo(aluno::class);
    }
}