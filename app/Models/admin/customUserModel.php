<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class customUserModel extends Model
{
    use HasFactory;

    public static function create($name, $email, $pass){
        $sql = "INSERT INTO users (`name`, `email`, `password`) VALUES ('$name', $email, $pass)";
        $result = DB::insert($sql);

        $id = DB::getPdo()->lastInsertId();
        return $id;
    }

    public static function show(){
        $sql = "SELECT *  FROM users";
        $result = DB::select($sql);
        return $result;
    }

    public static function edit($id, $field, $value){
        $sql = "UPDATE users SET $field = $value WHERE (id = $id)";
        $result = DB::update($sql);
    }

    public static function destroy($id){
        $sql = "DELETE FROM users WHERE (id = $id)";
        $result = DB::delete($sql);
    }

    public static function search($serach){
        $sql = "SELECT * FROM users WHERE email LIKE '%$serach%' OR name LIKE '%$serach%'";
        $result = DB::select($sql);
    }

    public static function find($id){
        $sql = "SELECT * FROM users WHERE (id = $id)";
        $result = DB::select($sql);
        return $result;
    }
}
