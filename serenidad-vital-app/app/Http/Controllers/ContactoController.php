<?php

namespace App\Http\Controllers;

use App\Mail\Contacto;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
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
            'mensaje' => 'required',
        ]);

        Contact::create([
            'user_name' => $request->input('nombre'),
            'user_apellido'=> $request->input('apellido'),
            'user_email'=> $request->input('email'),
            'user_telefono' => $request->input('telefono'),
            'user_mensaje' => $request->input('mensaje')
        ]);

        Mail::to('serenidad.vital@email.com')->send(new Contacto($request->input('nombre'), $request->input('apellido'), $request->input('email'), $request->input('telefono'), $request->input('mensaje')));

        return redirect()->back()->with("Email de contacto enviado correctamente.");

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
