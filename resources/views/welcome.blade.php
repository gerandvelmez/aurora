@extends('layouts.app')

@section('titulo','Pagina principal')  

@section('contenido')
<div
  class="hero min-h-screen"
  style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-md">
      <h1 class="mb-5 text-8xl font-bold">Bienvenido a Aurora</h1>
      <p class="mb-5">
        <h1 class="mb-5 text-2xl font-bold">Experiencia en tejidos de innovacion calidad y punto.</h1>
      </p>
      <button class="btn btn-primary">Empezar</button>
    </div>
  </div>
</div>      
@endsection