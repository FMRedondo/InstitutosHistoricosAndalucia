@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<section class="customTable">

  <div class="customTHeader">
      <div class="customTHead">
        <p>Instituto</p>
      </div>
      <div class="customTHead">
        <p>Localidad</p>
      </div>
      <div class="customTHead">
        <p>Provincia</p>
      </div>
      <div class="customTHead">
        <p>Sitio Web</p>
      </div>
      <div class="customTHead">
        <p>Recorrido Virtual</p>
      </div>
      <div class="customTHead">
        <p>Opciones</p>
      </div>
  </div>

  <div class="customTContent">
    <div class="customTData">

        <div class="customTCell">
            <p>Celia Viñas</p>
        </div>

        <div class="customTCell">
            <p>Almería</p>
        </div>

        <div class="customTCell">
            <p>Almería</p>
        </div>

        <div class="customTCell">
            <a href="https://iescelia.org/web/">https://iescelia.org/web/</a>
        </div>
        
        <div class="customTCell">
            <a href="https://iescelia.org/celia360-nuevo/public/">https://iescelia.org/celia360-nuevo/public/</a>
        </div>
        <div class="customTCell">
            <p>Imagina que aqui hay botones</p>
        </div>

    </div>
  </div>

</section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/estilosGenerales.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/adminLTE.css">
    <link rel="stylesheet" href="/css/tables.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
@stop

@section('js')
   
@stop