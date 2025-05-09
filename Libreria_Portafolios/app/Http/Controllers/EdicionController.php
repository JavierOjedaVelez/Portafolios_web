<?php

namespace App\Http\Controllers;

use App\Http\Resources\EdicionCollection;
use App\Http\Resources\EdicionResource;
use App\Models\Edicion;
use App\Http\Requests\StoreEdicionRequest;
use App\Http\Requests\UpdateEdicionRequest;

class EdicionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edicion = Edicion::paginate(10);

        return new EdicionCollection($edicion);
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
    public function store(StoreEdicionRequest $request)
    {
        return new EdicionResource(Edicion::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $edicion = Edicion::where('id_edicion', $id)->first();
        return new EdicionResource($edicion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Edicion $edicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEdicionRequest $request, $id)
    {
        $edicion = Edicion::where('id_edicion', $id)->first();

        $edicion->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $edicion = Edicion::where('id_edicion', $id)->first();

        $edicion->delete();
    }
}
