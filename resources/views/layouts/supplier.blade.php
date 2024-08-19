@extends('layouts.app')

@section('titulo','Mis proveedores')  

@section('contenido')
       <h1 class="text-blue-600">LISTA DE PROVEEDORES</h1>
       <ul>
        @foreach ($proveedor as $proveedor)
        <li>{{$proveedor->aup_name}} - dennier: {{$proveedor->aup_dennier}}</li>            
        @endforeach
       </ul>
@endsection