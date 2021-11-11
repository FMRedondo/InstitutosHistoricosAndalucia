@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Institutos</h1>
@stop

@section('content')

<div class="crudTables d-flex flex-column">
  <section class="searchTopBar mb-2 d-flex flex-row align-items-center">
      <div class="input-group w-75">
        <input type="text" class="form-control searchBar" id="inlineFormInputGroupUsername" placeholder="Introduce tu búsqueda">
        <div class="input-group-prepend">
          <i class="fa-solid fa-magnifying-glass input-group-text h-100 d-flex"></i>
        </div>
      </div>

      <div class="w-25 createSchool d-flex justify-content-center">
        <button class="btn btn-success">
          <i class="fa-solid fa-plus"></i>
        </button>
      </div>
  </section>
  
  <section class="customTable customContent">
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
        <div class="customTHead hideMobile">
          <p>Sitio Web</p>
        </div>
        <div class="customTHead hideMobile">
          <p>Recorrido</p>
        </div>
        <div class="customTHead hideMobile">
          <p>Opciones</p>
        </div>
    </div>
  
    <div class="customTContent">
      <div class="customTData">
        <div class="customTCell">
            <p>Celia Viñas</p>
        </div>
        <div class="customTCell tDataSecondary">
            <p>Almería</p>
        </div>
        <div class="customTCell tDataSecondary">
            <p>Almería</p>
        </div>
        <div class="customTCell">
          <a href="https://iescelia.org/web/" type="button" class="btn btn-labeled btn-info btnLink">
            <span class="btn-label"><i class="fa-solid fa-globe"></i></span> Sitio Web
          </a>
        </div>
        <div class="customTCell">
          <a href="https://iescelia.org/celia360-nuevo/public/" type="button" class="btn btn-labeled btn-info btnLink btnLink">
            <span class="btn-label"><i class="fa-solid fa-map-location-dot"></i></span> Recorrido
          </a>
        </div>
        <div class="customTCell customTOptions">
          <span class="btn btn-labeled btn-danger deleteSchool"><i class="fa-solid fa-trash-can"></i></span>
          <span class="btn btn-labeled btn-primary editSchool"><i class="fa-solid fa-pen-to-square"></i></span>
        </div>
      </div>
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
          <a href="https://iescelia.org/web/" type="button" class="btn btn-labeled btn-info btnLink">
            <span class="btn-label"><i class="fa-solid fa-globe"></i></span> Sitio Web
          </a>
        </div>
        <div class="customTCell">
          <a href="https://iescelia.org/celia360-nuevo/public/" type="button" class="btn btn-labeled btn-info btnLink">
            <span class="btn-label"><i class="fa-solid fa-map-location-dot"></i></span> Recorrido
          </a>
        </div>
        <div class="customTCell customTOptions">
              <span class="btn btn-labeled btn-danger deleteSchool"><i class="fa-solid fa-trash-can"></i></span>
              <span class="btn btn-labeled btn-primary editSchool"><i class="fa-solid fa-pen-to-square"></i></span>
        </div>
      </div>
  
    </div>
  </section>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/estilosGenerales.css">
    <link rel="stylesheet" href="/css/adminLTE.css">
    <link rel="stylesheet" href="/css/tables.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
@stop

@section('js')
    <script src="https://kit.fontawesome.com/75e57fedbe.js" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
@stop