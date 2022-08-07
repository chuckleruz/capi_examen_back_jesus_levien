<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
     // https://carbon.now.sh/
     public function getAll(){
        $data = [];
        
        $sql = "SELECT CONCAT(ud.domicilio,' ',ud.numero_exterior,' ',ud.colonia,' ',ud.cp,' ',ud.ciudad) as direccion,us.name,
        TIMESTAMPDIFF(YEAR,us.fecha_nacimiento,CURDATE()) as edad ,us.fecha_nacimiento
            FROM users as us
            LEFT JOIN user_domicilio as ud on ud.user_id = us.id";
        $data = DB::select($sql);
        return $data;
        return response()->json($data, 200);
    }


}
