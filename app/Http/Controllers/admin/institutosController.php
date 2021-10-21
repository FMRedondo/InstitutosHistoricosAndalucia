<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\institutos;

class institutosController extends Controller
{
    public function ejecutarMetodo(){
        // Conviene poner condicionales para que no se ejecuten la ID si no se usa en el metodo a llamar
        $id = $_POST['id'];
        $metodo = $_POST['metodo'];
        $_token = $_POST['_token'];

        $this->$metodo($id);
    }
}
