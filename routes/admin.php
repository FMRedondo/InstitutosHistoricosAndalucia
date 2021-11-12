<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\customUserController;


Route::get('/', function () {
    return view('admin/index');
});

Route::get('/usuarios', [customUserController::class, 'index'])-> name('show.index');
Route::get('/usuarios/listaUsuarios', [customUserController::class, 'show'])-> name('show.users');

Route::get('/institutos', function () {
    return view('admin/institutos');
});