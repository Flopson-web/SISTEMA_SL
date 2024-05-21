<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nombre' => $this->faker->firstName,
                'apellido' => $this->faker->lastName,
                'foto' => null,
                'edad' => $this->faker->numberBetween(5, 18),
                'nro_de_lista' => $this->faker->numberBetween(1, 30),
                'nombre_padre' => $this->faker->name,
                'trabajo_padre' => $this->faker->jobTitle,
                'celular_padre' => $this->faker->numberBetween(100000, 6000000),
                'nombre_madre' => $this->faker->name,
                'trabajo_madre' => $this->faker->jobTitle,
                'celular_madre' => $this->faker->numberBetween(100000, 6000000),
                'nro_total_hermanos' => $this->faker->numberBetween(0, 5),
                'lugar_que_ocupa' => $this->faker->randomElement(['Mayor', 'Medio', 'Menor']),
                'hermanos_en_colegio' => $this->faker->numberBetween(0, 5),
                'direccion_actual' => $this->faker->address,
                'telefono_casa' => $this->faker->numberBetween(100000, 6000000),
                'celular_estudiante' => $this->faker->numberBetween(100000, 6000000),
                'trabaja' => $this->faker->randomElement(['Sí', 'No']),
                'lugar_trabajo' => $this->faker->company,
                'nro_dosis_covid' => $this->faker->numberBetween(0, 2),
                'vive_con' => $this->faker->randomElement(['Padres', 'Abuelos', 'Tíos', 'Hermanos', 'Otros']),
                'religion' => $this->faker->randomElement(['Católica', 'Evangélica', 'Otra']),
                'user_id' => User::all()->random()->id,
                'course_id' => Course::all()->random()->id
        ];
    }
}
