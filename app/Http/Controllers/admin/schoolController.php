<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class schoolController extends Controller
{
    public function ejecutarMetodo(){
        $id = $_POST['id'];
        $metodo = $_POST['metodo'];
        $_token = $_POST['_token'];

        $this->$metodo($id);
    }
}
