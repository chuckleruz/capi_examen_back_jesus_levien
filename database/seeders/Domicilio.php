<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Domicilio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Domicilio::factory(100)->create();
    }
}
