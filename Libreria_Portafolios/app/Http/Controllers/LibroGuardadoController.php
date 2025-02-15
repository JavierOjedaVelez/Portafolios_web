<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroGuardadoCollection;
use App\Http\Resources\LibroGuardadoResource;
use App\Models\LibroGuardado;
use App\Http\Requests\StoreLibroGuardadoRequest;
use App\Http\Requests\UpdateLibroGuardadoRequest;

class LibroGuardadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = LibroGuardado::paginate(10);

        return new LibroGuardadoCollection($libros);
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
    public function store(StoreLibroGuardadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $libroGuardado = LibroGuardado::where('id_libros_guardados',$id)->first();
        return new LibroGuardadoResource($libroGuardado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LibroGuardado $libroGuardado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroGuardadoRequest $request, LibroGuardado $libroGuardado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LibroGuardado $libroGuardado)
    {
        //
    }
}
