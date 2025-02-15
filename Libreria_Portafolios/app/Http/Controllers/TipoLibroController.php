<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipoLibroCollection;
use App\Http\Resources\TipoLibroResource;
use App\Models\TipoLibro;
use App\Http\Requests\StoreTipoLibroRequest;
use App\Http\Requests\UpdateTipoLibroRequest;

class TipoLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipos = TipoLibro::paginate(10);

        return new TipoLibroCollection($tipos);
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
    public function store(StoreTipoLibroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $tipoLibro = TipoLibro::where('id_tipo_libro', $id)->first();
        return new TipoLibroResource($tipoLibro);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoLibro $tipoLibro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoLibroRequest $request, TipoLibro $tipoLibro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoLibro $tipoLibro)
    {
        //
    }
}
