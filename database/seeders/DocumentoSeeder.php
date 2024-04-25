<?php

namespace Database\Seeders;

use App\Models\Documento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Documento::create([
            'name'=> 'Informe 1º Trimestre'
        ]);
        Documento::create([
            'name'=> 'Aprovechamiento 1º Trimestre'
        ]);
        Documento::create([
            'name'=> 'Centralizador 1º Trimestre'
        ]);
    }
}
