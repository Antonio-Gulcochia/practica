<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'usuario_id',
    ];

    // Relación muchos a uno con Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
