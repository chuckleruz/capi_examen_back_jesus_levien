<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
Use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $query = "SELECT us.id
            FROM users as us";

        $data = DB::select($query);
        
        $datas = json_encode($data);
        
        foreach($data as $key=>$op){

            $userId = $op['id'];
            return [
                'user_id'=>$userId,
                'domicilio'=>'Sin rumbo',
                'numero_exterior'=>1,
                'colonia'=>'Lomas',
                'cp'=>12345,
                'ciudad'=>'Monterrey',
            ];
        }
       

       
    }
}
