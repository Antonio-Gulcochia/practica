<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva; // Asegúrate de importar el modelo Reserva si no lo has hecho aún

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtiene todas las reservas y las devuelve en la vista
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Muestra el formulario para crear una nueva reserva
        return view('reservas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            // Agrega aquí las reglas de validación para otros campos de reserva
        ]);

        // Crea una nueva instancia de Reserva con los datos del formulario
        $reserva = new Reserva([
            'nombre' => $request->nombre,
            // Asigna otros campos de reserva aquí
        ]);

        // Guarda la reserva en la base de datos
        $reserva->save();

        // Redirecciona a la página de inicio o a cualquier otra vista que desees
        return redirect()->route('reservas.index');
    }

    // Agrega otras funciones del controlador aquí, como show(), edit(), update(), destroy(), etc.
}


