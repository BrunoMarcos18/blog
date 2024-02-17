<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Estagiário',
            'email' => 'estagiario@gmail.com',
            'password' => bcrypt('123'),
            'permission' => 2
        ]);
    }
}
