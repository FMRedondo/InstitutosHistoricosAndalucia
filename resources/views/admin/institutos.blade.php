@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<section class="container mx-auto p-6 font-mono">
<div class="tabla flex flex-col">

  <div class="cabeza flex flex-row">
      <div class="w-1/6">
        <p>Instituto</p>
      </div>
      <div class="w-1/6">
        <p>Localidad</p>
      </div>
      <div class="w-1/6">
        <p>Provincia</p>
      </div>
      <div class="w-1/6">
        <p>Sitio Web</p>
      </div>
      <div class="w-1/6">
        <p>Recorrido Virtual</p>
      </div>
      <div class="w-1/6">
        <p>Opciones</p>
      </div>
  </div>

  <div class="entradas flex flex-col">
    <div class="entrada flex flex-row">
        <div class="w-1/6">
            <p>Celia Viñas</p>
        </div>

        <div class="w-1/6">
            <p>Almería</p>
        </div>

        <div class="w-1/6">
            <p>Almería</p>
        </div>

        <div class="w-1/6">
            <a href="https://iescelia.org/web/">https://iescelia.org/web/</a>
        </div>
        
        <div class="w-1/6">
            <a href="https://iescelia.org/celia360-nuevo/public/">https://iescelia.org/celia360-nuevo/public/</a>
        </div>
        <div class="w-1/6">
            <p>Imagina que aqui hay botones</p>
        </div>
    </div>
  </div>

</div>
</section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/adminLTE.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
@stop

@section('js')
   
@stop