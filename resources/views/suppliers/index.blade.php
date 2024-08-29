@extends('layouts.app')

@section('titulo', 'proveedores')

@section('contenido')

@section('contenido')

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:cols-4 gap-4 m-6">
        @foreach ($supplier as $supplier)
            <div class="card bg-base-100 w-60 shadow-xl">
                <figure>
                    <img src="https://picsum.photos/id/{{ $supplier->aup_id + 10 }}/240" alt="$supplier->aup_name" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $supplier->aup_name }}</h2>
                    <div class="badge badge-outline">{{ $supplier->aup_status }}</div>
                    <div class="badge badge-outline">Agregar</div>
                    <div class="badge badge-outline">Eliminar</div>
                    <p>{{ $supplier->aup_dennier }}</p>
                    <div class="card-actions justify-end">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
