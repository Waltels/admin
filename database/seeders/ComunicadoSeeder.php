<?php

namespace Database\Seeders;

use App\Models\Comunicado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComunicadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comunicado::create([
            'name'=> 'DIRECCION',
            'content'=> 'PRUEVA',
            'fecha'=> '01-01-2024'
        ]);
    }
}
