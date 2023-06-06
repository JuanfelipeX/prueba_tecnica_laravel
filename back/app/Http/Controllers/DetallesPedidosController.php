<?php

namespace App\Http\Controllers;

use App\Models\detalles_pedidos;
use Illuminate\Http\Request;

class DetallesPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = detalles_pedidos::all();

        return response()->json([
            'type'      => 'Detalles Pedidos Consultados Correctamente',
            'Pedidos'    => $data,
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
        $data = detalles_pedidos::create($request->all());
        $data->save();

        return response()->json([
            'message' => "'Detalles Pedidos Creados Correctamente",
            'type'    => "success",
            'id'    => $data->id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(detalles_pedidos $detalles_pedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detalles_pedidos $detalles_pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detalles_pedidos $detalles_pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detalles_pedidos $detalles_pedidos)
    {
        //
    }
}
