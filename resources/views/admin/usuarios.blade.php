<!-- 

    Esta es la vista donde podemos ver todos los usuarios de la web. Las acciones necesarias
    son las sigientes:

        -> ver Usuarios
        -> Buscar Usuarios
        -> Filtrar usuarios
        -> editar usuarios

    Todas estas acciones, se localizan en /js/admin/usuarios.js -> Donde se localiza todo el script
    para la recogida de eventos, peticiones Ajax, etc. Por otro lado tenemos vistas y controladores de 
    admin/usuarios y la clase por defecto users.

-->






@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
   
@stop

@section('content')


    <div class="usersContent">

    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/adminLTE.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="/js/admin/users.js"></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
@stop