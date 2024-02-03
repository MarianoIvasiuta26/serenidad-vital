<?php

namespace App\Http\Controllers;

use App\Mail\SolicitarTurno;
use App\Models\Turn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SolicitudTurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => ['required','string','max:50'],
            'apellido' => ['required','string','max:30'],
            'email' => ['required','string','email', 'max:100'],
            'telefono' => ['required','numeric','digits:10'],
            'tipo-consulta' => ['required', 'string']
        ]);

        $turno = Turn::create([
            'user_name' => $request->input('nombre'),
            'user_apellido'=> $request->input('apellido'),
            'user_email'=> $request->input('email'),
            'user_telefono' => $request->input('telefono'),
            'tipo_consulta' => $request->input('tipo-consulta')
        ]);

        if($turno){
            Mail::to('serenidad.vital@email.com')->send(new SolicitarTurno($request->input('nombre'), $request->input('apellido'), $request->input('email'), $request->input('telefono'), $request->input('tipo-consulta')));
            return redirect()->back()->with("Email de solicitud de turno enviado correctamente.");
        } else {
            return redirect()->back()->with('error', '¡Error al enviar el correo para solicitar un turno!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
