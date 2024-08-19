<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
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

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('admin');

        $teacher = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
            'password' => bcrypt('password')
        ]);
        $teacher->assignRole('teacher');

        $asesor = User::create([
            'name' => 'Asesor User',
            'email' => 'asesor@example.com',
            'password' => bcrypt('password')
        ]);
        $asesor->assignRole('asesor');

        $student = User::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => bcrypt('password')
        ]);
        $student->assignRole('student');


        User::factory(50)->create();
    }
}
