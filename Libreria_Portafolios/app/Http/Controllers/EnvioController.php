<?php

namespace App\Http\Controllers;

use App\Http\Resources\EnvioCollection;
use App\Http\Resources\EnvioResource;
use App\Models\Envio;
use App\Http\Requests\StoreEnvioRequest;
use App\Http\Requests\UpdateEnvioRequest;

class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $envios = Envio::paginate(10);

        return new EnvioCollection($envios);
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
    public function store(StoreEnvioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Envio $envio)
    {
        return new EnvioResource($envio);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Envio $envio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEnvioRequest $request, Envio $envio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Envio $envio)
    {
        //
    }
}
