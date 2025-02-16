<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReseñaRequest;
use App\Http\Requests\UpdateReseñaRequest;
use App\Http\Resources\ReseñaCollection;
use App\Http\Resources\ReseñaResource;
use App\Models\Reseña;
use Illuminate\Http\Request;

class ReseñaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reseñas = Reseña::paginate(10);

        return new ReseñaCollection($reseñas);
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
    public function store(StoreReseñaRequest $request)
    {
        return new ReseñaResource(Reseña::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $reseña = Reseña::where('id_reseña', $id)->first();

        return new ReseñaResource($reseña);
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
    public function update(UpdateReseñaRequest $request, $id)
    {
        $reseña = Reseña::where('id_reseña', $id)->first();
        $reseña->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $reseña = Reseña::where('id_reseña', $id)->first();
        $reseña->delete();
    }
}
