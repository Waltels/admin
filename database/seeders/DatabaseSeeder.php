<?php

namespace Database\Seeders;

use App\Models\Documento;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DocumentoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(ComunicadoSeeder::class);
        $this->call(NivelSeeder::class);
    }
}
