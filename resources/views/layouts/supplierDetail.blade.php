@extends('layouts.app')

@section('titulo','Mis proveedores')  

@section('contenido')
       <h2 class="text-green-800">DETALLE DE PROVEEDORES</h2>
       <ul>            
        <li>Nombre: {{$proveedor->aup_name}}
        <li>Denier:  {{$proveedor->aup_dennier}}</li>
        <li>Metros hilo: {{$proveedor->aup_meters_threads}}</li>
        <li>Tipo de hilo: {{$proveedor->aup_type_threads}}</li>           
       </ul>
@endsection