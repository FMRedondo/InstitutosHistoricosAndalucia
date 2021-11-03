<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin/index');
});

Route::get('/usuarios', function () {
    return view('admin/usuarios');
});

Route::get('/institutos', function () {
    return view('admin/institutos');
});