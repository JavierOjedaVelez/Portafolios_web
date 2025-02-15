<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetallePedidoCollection;
use App\Http\Resources\DetallePedidoResource;
use App\Models\Detalle_Pedido;
use App\Http\Requests\StoreDetalle_PedidoRequest;
use App\Http\Requests\UpdateDetalle_PedidoRequest;

class DetallePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalles = Detalle_Pedido::paginate(10);

        return new DetallePedidoCollection($detalles);
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
    public function store(StoreDetalle_PedidoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

    $detalle_Pedido = Detalle_Pedido::where('id_detalle_pedido', $id)->first();

        return new DetallePedidoResource($detalle_Pedido);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detalle_Pedido $detalle_Pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDetalle_PedidoRequest $request, Detalle_Pedido $detalle_Pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalle_Pedido $detalle_Pedido)
    {
        //
    }
}
