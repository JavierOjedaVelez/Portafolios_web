<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroCollection;
use App\Http\Resources\LibroResource;
use App\Models\Autor;
use App\Models\Edicion;
use App\Models\Genero;
use App\Models\Libro;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Models\TipoLibro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::paginate(10);

        return new LibroCollection($libros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = TipoLibro::all();
        $generos = Genero::all();
        $edicion = Edicion::all();
        $autor = Autor::all();

        return View('libros.create', compact('tipos', 'generos', 'edicion', 'autor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibroRequest $request)
    {
        $datos = $request->validated();

        $libro = new Libro();

        $libro->titulo = $datos["titulo"];
        $libro->precio = $datos["precio"];
        $libro->stock = $datos["stock"];
        $libro->sinopsis = $datos["sinopsis"];
        $libro->portada = $datos["portada"];
        $libro->fecha_publicacion = $datos["fecha_publicacion"];
        $libro->id_tipo_libro = $datos["id_tipo_libro"];
        $libro->id_edicion = $datos["id_edicion"];

        $libro->save();



            return response()->json(["success" => true]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return new LibroResource($libro);
    }



    public function ShowTablalibro(Libro $libro){



        return View('libros.Show', compact('libro'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


        $libro = Libro::where('isbn', $id)->first();
        $tipos = TipoLibro::all();
        $generos = Genero::all();
        $edicion = Edicion::all();
        $autor = Autor::all();

        return View('libros.Edit', compact('tipos', 'generos', 'edicion', 'autor', 'libro'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroRequest $request, $id)
    {
        $libro = Libro::where('isbn', $id)->first();

        if (!$libro) {
            return response()->json(['success' => false, 'message' => 'Libro no encontrado'], 404);
        }

        $libro->update($request->all());

        return View('principal');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $libro = Libro::where('isbn', $id)->first();
        $libro->delete();

        return response()->json(['success' => true]);
    }
}
