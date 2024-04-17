<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'WALTER LAURA SOTO',
            'email' => 'waltels2019@gmail.com',
            'password' => bcrypt('123456789')
        ]);

    $user->assignRole('DIRECTOR');
    }
}
