<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'name' => 'Celia Viñas',
            'description' => 'Es un instituto histórico muy potente, hogar de proyectacos hechos por los llamados CELIOS y de este proyecto tan perfecto.',
            'image' => 'celia.jpg',
            'location' => 'Almería',
            'province' => 'Almería',
            'urlWeb' => 'https://iescelia.org/web/',
            'urlTour' => 'https://iescelia.org/celia360-nuevo/public/',
            'coorX' => '36.83794168461722',
            'coorY' => '36.83794168461722',
        ]);
    }
}
