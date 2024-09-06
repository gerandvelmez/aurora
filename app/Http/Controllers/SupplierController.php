<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('suppliers.index', compact('supplier'));
    }

    /**     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($aup_id)
    {
        $supplier = Supplier::find($aup_id);
        return view('layouts.supplierDetail', compact('supplier'));
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $supplier = Supplier::findOrFail($id);
    return view('suppliers.edit', compact('supplier'));
}

    /**public function edit($id)
    {
        return view('suppliers.edit');
    }**/

    
    /* Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index');
    }
}
