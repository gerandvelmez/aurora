<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Proveedor::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos=$request->validate([
            'aup_name'=>['required','string','max:100'],
            'aup_dennier'=>['required','string','max:100'],
            'aup_meters_threads'=>['required','integer','min:1'],
            'aup_type_threads'=>['required','string','max:100'],
            'aup_status'=>['required','string','max:20'],
        ]);
        $proveedor=Proveedor::create($datos);
        return response()->json([
            'mensaje'=>'proveedor registrado con exito'
            ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        return response()->json($proveedor,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        $datos=$request->validate([
            'aup_name'=>['required','string','max:100'],
            'aup_dennier'=>['required','string','max:100'],
            'aup_meters_threads'=>['required','integer','min:1'],
            'aup_type_threads'=>['required','string','max:100'],
            'aup_status'=>['required','string','max:20'],
        ]);
        $proveedor->update($datos);
        return response()->json([
            'mensaje'=>'proveedor actualizado con exito'            
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return response()->json([
            'mensaje'=>'proveedor eliminado con exito',
            ], 204);
    }
}
