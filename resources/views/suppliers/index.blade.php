@extends('layouts.app')

@section('titulo', 'proveedores')

@section('contenido')

@section('contenido')
    <div class="flex justify-end m-4">
        <a href="{{ route('supplier.create') }}" class= "btn btn-outline">Nuevo Proveedor</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:cols-4 gap-4 m-6">
        @foreach ($supplier as $supplier)
            <div class="card bg-base-100 w-60 shadow-xl">
                <figure>
                    <img src="https://picsum.photos/id/{{ $supplier->aup_id + 10 }}/240" alt="$supplier->aup_name" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $supplier->aup_name }}</h2>
                    <p>{{ $supplier->aup_dennier }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('supplier.edit', $supplier->aup_id) }}" class= "btn btn-primary">Editar
                            Proveedor</a>
                            <div class="btn btn-outline -outline btn-xs">{{ $supplier->aup_status }}</div>
                        <form action="{{ route('supplier.destroy', $supplier->aup_id) }}" method= "POST">
                            @csrf {{-- token de seguridad --}}
                            @method('DELETE')
                            <button type= "submit" class= "btn btn-outline btn-xs">Eliminar</button>

                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
