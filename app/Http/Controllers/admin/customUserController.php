<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\customUserModel;

class customUserController extends Controller
{
    public function index(){
        return view('admin/usuarios');
    }

    public function create(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $result = customUserModel::create($name, $email,$pass);
        return $result;

    }

    public function show(){
        $result = customUserModel::show();
        return $result;
    }

    public function edit(){
        $id = $_POST['id'];
        $field = $_POST['field'];
        $value = $_POST['value'];

        $result = customUserModel::edit($id, $field, $value);
    }

    public function destroy($id){
        $id = $_POST['id'];
        $result = customUserModel::destroy($id);
    }

    public function search($search){
        $search = $_POST['search'];
        $result = customUserModel::search($search);
        return $result;
    }

    public function find($id){
        $id = $_POST['id'];
        $result = customUserModel::find($id);
        return $result;
    }

}
