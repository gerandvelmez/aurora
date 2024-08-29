@extends('layouts.app')

@section('titulo','Mis proveedores')  

@section('contenido')
       <h1 class="text-blue-600">LISTA DE PROVEEDORES</h1>
       <ul>
        @foreach ($suppliers as $supplier)
        <li>{{$supplier->aup_name}} - dennier: {{$supplier->aup_dennier}}</li>            
        @endforeach
       </ul>
@endsection