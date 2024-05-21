<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nombre' => $this->faker->name,
                'apellido' => $this->faker->lastName,
                'especialidad' => $this->faker->jobTitle,
                'edad' => $this->faker->numberBetween(25, 60),
                'celular' => $this->faker->numberBetween(100000, 6000000),
                'user_id' => User::all()->random()->id,        
        ];
    }
}
