<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nivel::create([
            'name'=> 'Inicial'
        ]);
        Nivel::create([
            'name'=> 'Primario'
        ]);
        Nivel::create([
            'name'=> 'Secundario'
        ]);
    }
}
