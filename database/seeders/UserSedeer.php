<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Flopson',
            'email' => 'am1620m@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(50)->create();
    }
}
