<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resena extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido',
        'usuario_id',
        'libro_id',
    ];

    // Relación muchos a uno con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    // Relación muchos a uno con Libro
    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}

