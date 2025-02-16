<?php

namespace App\Http\Controllers;

use App\Http\Resources\AutorCollection;
use App\Http\Resources\AutorResource;
use App\Models\Autor;
use App\Http\Requests\StoreAutorRequest;
use App\Http\Requests\UpdateAutorRequest;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::paginate(10);

        return new AutorCollection($autores);
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
    public function store(StoreAutorRequest $request)
    {
        return new AutorResource(Autor::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $autor = Autor::where('id_autor', $id)->first();
        return new AutorResource($autor);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutorRequest $request,$id)
    {
        $autor = Autor::where('id_autor', $id)->first();
        $autor->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $autor = Autor::where('id_autor', $id)->first();

        $autor->delete();
    }
}
