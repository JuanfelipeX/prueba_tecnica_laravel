<?php

namespace App\Http\Controllers;

use App\Models\terceros;
use Illuminate\Http\Request;

class TercerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = terceros::all();

        return response()->json([
            'type'      => 'Terceros Consultados Correctamente',
            'Terceros'    => $data,
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
        $data = terceros::create($request->all());
        $data->save();

        return response()->json([
            'message' => "Terceros Creados Correctamente",
            'type'    => "success",
            'id'    => $data->id
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(terceros $terceros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(terceros $terceros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, terceros $terceros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(terceros $terceros)
    {
        //
    }
}
