<?php

namespace App\Http\Controllers;

use App\Http\Resources\GeneroCollection;
use App\Http\Resources\GeneroResource;
use App\Models\Genero;
use App\Http\Requests\StoreGeneroRequest;
use App\Http\Requests\UpdateGeneroRequest;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = Genero::paginate(10);

        return new GeneroCollection($generos);
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
    public function store(StoreGeneroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Genero $genero)
    {
        return new GeneroResource($genero);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneroRequest $request, Genero $genero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        //
    }
}
