<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipoUsuarioCollection;
use App\Http\Resources\TipoUsuarioResource;
use App\Models\TipoUsuario;
use App\Http\Requests\StoreTipoUsuarioRequest;
use App\Http\Requests\UpdateTipoUsuarioRequest;

class TipoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listatipos = TipoUsuario::paginate(10);

        return new TipoUsuarioCollection($listatipos);
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
    public function store(StoreTipoUsuarioRequest $request)
    {
        return new TipoUsuarioResource(TipoUsuario::create($request->all()));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $tipoUsuario = TipoUsuario::where('id_tipo_usuario', $id)->first();
        return new TipoUsuarioResource($tipoUsuario);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoUsuario $tipoUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTipoUsuarioRequest $request, $id)
    {
        $tipoUsuario = TipoUsuario::where('id_tipo_usuario', $id)->first();

        $tipoUsuario->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tipoUsuario = TipoUsuario::where('id_tipo_usuario', $id)->first();

        $tipoUsuario->delete();

    }
}
