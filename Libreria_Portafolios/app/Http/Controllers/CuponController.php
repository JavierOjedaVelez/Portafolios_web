<?php

namespace App\Http\Controllers;

use App\Http\Resources\CuponCollection;
use App\Http\Resources\CuponResource;
use App\Models\Cupon;
use App\Http\Requests\StoreCuponRequest;
use App\Http\Requests\UpdateCuponRequest;

class CuponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cupones = Cupon::paginate(10);

        return new CuponCollection($cupones);
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
    public function store(StoreCuponRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $cupon = Cupon::where('id_cupon', $id)->first();
        return new CuponResource($cupon);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cupon $cupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCuponRequest $request, Cupon $cupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cupon $cupon)
    {
        //
    }
}
