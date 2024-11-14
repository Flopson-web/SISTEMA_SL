<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $asesor1 = Teacher::inRandomOrder()->first()->id;
        $asesor2 = Teacher::inRandomOrder()->first()->id;

        return [
            'nombre_curso' => $this->faker->word,
            'gestion_academica' => $this->faker->year,
            'paralelo' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'turno' => $this->faker->randomElement(['Mañana', 'Tarde']),
            'asesor_id_1' => $asesor1,
            'asesor_id_2' => $asesor2,
        ];
    }
}
