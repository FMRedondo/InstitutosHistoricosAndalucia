<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class institutos extends Model
{
    use HasFactory;

    public function listarInstitutos(){
        $sql = "SELECT * FROM institutos";
        $respuesta = DB::select($sql);
        return $respuesta;
    }

    public function verInstituto($id){
        $sql = "SELECT * FROM institutos WHERE (id = $id)";
        $respuesta = DB::select($sql);
        return $respuesta;
    }

    public function crearInstituto(){
        
    }

    public function eliminarInstituto($id){

    }

    public function modificarInstituto($id){

    }
}
