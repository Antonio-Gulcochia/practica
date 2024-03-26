<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'biografia',
    ];

    // Relación uno a muchos con Libro
    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
