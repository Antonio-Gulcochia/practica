<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
    ];

    // Relación uno a muchos con Reserva
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    // Relación uno a muchos con Resena
    public function resenas()
    {
        return $this->hasMany(Resena::class);
    }
}


