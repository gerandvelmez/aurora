@extends('layouts.app')

@section('titulo','Mis proveedores')  

@section('contenido')
       <h2 class="text-green-800">DETALLE DE PROVEEDORES</h2>
       <ul>            
        <li>Nombre: {{$supplier->aup_name}}</li>
        <li>Denier:  {{$supplier->aup_dennier}}</li>
        <li>Metros hilo: {{$supplier->aup_meters_threads}}</li>
        <li>Tipo de hilo: {{$supplier->aup_type_threads}}</li>           
       </ul>
@endsection