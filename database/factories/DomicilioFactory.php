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

        return [
        'user_id'=> $this->faker->unique()->numberBetween(1, count(DB::select($query))),
        'domicilio'=> $this->faker->address,
        'numero_exterior'=>  $this->faker->randomNumber(2),
        'colonia'=> $this->faker->city,
        'cp'=>  $this->faker->randomNumber(5),
        'ciudad'=>$this->faker->state,
        ];   
    }
}
