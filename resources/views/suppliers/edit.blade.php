@extends('layouts.app')

@section('titulo', 'mis proveedores')
@section('cabecera', 'editar proveedor')

@section('contenido')
    <div class= "flex justify-center my-6 ">
        <div class= "card bg-base-100 w-96 shadow-2xl">
            <form class="card-body" action="{{ route('supplier.edit') }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Formulario dentro del modal -->


                <!-- Nombre del proveedor -->
                <div class="form-group">
                    <label for="nombre_proveedor">Nombre del Proveedor</label>
                    <input type="text" name="nombre_proveedor" id="nombre_proveedor" class="form-control" required>
                </div>

                <!-- ID -->
                <div class="form-group">
                    <label for="id_proveedor">ID</label>
                    <input type="number" name="id_proveedor" id="id_proveedor" class="form-control" required>
                </div>

                <!-- Denier -->
                <div class="form-group">
                    <label for="denier">Denier</label>
                    <input type="text" name="denier" id="denier" class="form-control" required>
                </div>

                <!-- Número de lote -->
                <div class="form-group">
                    <label for="numero_lote">Número de Lote</label>
                    <input type="text" name="numero_lote" id="numero_lote" class="form-control" required>
                </div>

                <!-- Tipo de hilaza -->
                <div class="form-group">
                    <label for="metros">Tipo de hilaza</label>
                    <input type="text" name="metros" id="metros" class="form-control" required>
                </div>

                <!-- Stock -->
                <div class="form-group">
                    <label for="stock">Metros de Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control" required>
                </div>

                <!-- Botón de envío -->
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
    @endsection