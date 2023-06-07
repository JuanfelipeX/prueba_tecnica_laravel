<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = usuarios::all();

        return response()->json([
            'type'      => 'Usuarios Consultados Correctamente',
            'Usuarios'    => $data,
        ]);
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
        $data = usuarios::create($request->all());
        $data->save();

        return response()->json([
            'message' => "Usuario Creado Correctamente",
            'type'    => "success",
            'id'    => $data->id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuarios $usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuarios $usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuarios $usuarios)
    {
        //
    }

    public function encontrarPorEmail($email)
    {
        $data = usuarios::where('email', $email)->first();

        if ($data) {
            return response()->json([
                'type' => 'Usuario Encontrado',
                'Usuario' => $data,
            ]);
        } else {
            return response()->json([
                'type' => 'Usuario no encontrado',
                'email' => $email,
            ]);
        }
    }
}
