<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/** MODELO DE INSTITUTOS **/

class Schools extends Model
{
    use HasFactory;

    /** OBTENER LISTADO DE TODOS LOS INSTITUTOS
     * @respuesta -> Resultados de consulta
     */
    public function show(){
        $sql = "SELECT * FROM schools";
        $respuesta = DB::select($sql);
        return $respuesta;
    }

    /** OBTENER UN INSTITUTO
     * @id -> id del instituto
     */
    public function find($id){
        $sql = "SELECT * FROM schools WHERE (id = $id)";
        $respuesta = DB::select($sql);
        return $respuesta;
    }

    /** CREAR UN INSTITUTO
     * @name        -> Nombre del instituto
     * @description -> Descripcion del instituto
     * @image       -> Imagen del instituto
     * @location    -> Localidad del instituto
     * @province    -> Provincia del instituto
     * @urlWeb      -> Url de la pagina web del instituto
     * @urlTour     -> Url del tour virtual
     */
    public function create($name, $description, $image, $location, $province, $urlWeb, $urlTour){
        $sql = "INSERT INTO schools (name, description, image, location, province, urlWeb, urlTour) VALUES ($name, $description, $image, $location, $province, $urlWeb, $urlTour)";
        DB::insert($sql);
        $id = DB::getPdo()->lastInsertId();
        return $id;
    }

    /** ELIMINAR INSTITUTO
     * @id -> id del instituto
     */
    public function destroy($id){
        $sql = "DELETE * FROM schools WHERE id=$id";
        DB::delete($sql);
    }

    /** MODIFICAR UN INSTITUTO
     * @id      -> id del instituto
     * @field   -> campo para cambiar
     * @value   -> nuevo valor
     */
    public function edit($id, $campo, $value){
        $sql = "UPDATE schools SET $campo = '$value' WHERE id=$id";
        DB::update($sql);
    }

    /** BUSQUEDA
     * @search  -> Busqueda que realiza el usuario
     */

     public function search($search){
        $sql = "SELECT * FROM schools WHERE name = '$search' OR location = '$search' OR province = '$search'";
        DB::select($sql);
    }

    /** OBTENER NOMBRE DE INSTITUTO POR ID
     *  @id -> id del instituto a buscar
     */
    public function getName($id){
        $sql = "SELECT name FROM schools WHERE id=$id";
        DB::select($sql);
    }
}
