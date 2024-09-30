<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'escola_id'];

    // Relacionamento com escola
    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }
}
