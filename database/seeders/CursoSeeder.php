<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::create([
            'name'=> 'Primero'
        ]);
        Curso::create([
            'name'=> 'Segundo'
        ]);
        Curso::create([
            'name'=> 'Tercero'
        ]);
        Curso::create([
            'name'=> 'Cuarto'
        ]);
        Curso::create([
            'name'=> 'Quinto'
        ]);
        Curso::create([
            'name'=> 'Sexto'
        ]);
        
    }
}
