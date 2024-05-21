<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'nombre' => $this->faker->word,
                'fecha' => $this->faker->date(),
                'item' => $this->faker->randomElement(['A-P 1', 'A-P 2', 'A-P 3', 'A-P 4', 'A-P 5', 'A-P 6', 'S-D 1', 'S-D 2', 'S-D 3', 'S-D 4', 'S-D 5', 'S-D 6', 'S-D 7', 'S-D 8']),
                'area' => $this->faker->word,
                'trimestre' => $this->faker->randomElement(['1ER', '2DO', '3ER']),
                'detalle_observaciones' => $this->faker->text,
                'student_id' => Student::all() -> random()->id,
                'course_id' => Course::all() -> random()->id
        ];
    }
}
