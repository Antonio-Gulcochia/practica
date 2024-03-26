<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor_id',
        'categoria_id',
    ];

    // Relación muchos a uno con Autor
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    // Relación muchos a muchos con Categoria
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    // Relación uno a muchos con Resena
    public function resenas()
    {
        return $this->hasMany(Resena::class);
    }
}
