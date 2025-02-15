<?php

namespace App\Http\Controllers;

use App\Http\Resources\PerfilUsuarioCollection;
use App\Http\Resources\PerfilUsuarioResource;
use App\Models\PerfilUsuario;
use App\Http\Requests\StorePerfilUsuarioRequest;
use App\Http\Requests\UpdatePerfilUsuarioRequest;

class PerfilUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfiles = PerfilUsuario::paginate(10);

        return new PerfilUsuarioCollection($perfiles);
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
    public function store(StorePerfilUsuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $perfilUsuario = PerfilUsuario::where("id_perfil", $id)->first();
        return new PerfilUsuarioResource($perfilUsuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerfilUsuario $perfilUsuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerfilUsuarioRequest $request, PerfilUsuario $perfilUsuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerfilUsuario $perfilUsuario)
    {
        //
    }
}
