<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class usuario extends Model
{
    use HasFactory;

    public function listarUsuarios(){
        $sql = "SELECT name, email FROM users";
        $respuesta = DB::select($sql);
        return $respuesta;
    }

    public function ver($id){
        $sql = "SELECT name, email FROM users WHERE (id = $id)";
        $respuesta = DB::select($sql);
        return $respuesta;
    }

    public function modificarUsuario($id, $campo, $valor){
        $sql = "UPDATE users SET $campo = '$valor' WHERE (id = $id)";
        DB::update($sql);
    }

    public function aniadirRol($idUsuario, $nombreRol){
        $usuario = User::find($idUsuario);
        $usuario->assignRole($nombreRol);
    }

    public function quitarRol($idUsuario, $nombreRol){
        $usuario = User::find($idUsuario);
        $usuario->removeRole($nombreRol);
    }
}
