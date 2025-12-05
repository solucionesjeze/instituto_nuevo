<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => $this->faker->firstName(),
            "apellido" => fake()->lastName(),
            "email" => fake()->unique()->Email(),
            "password" => bcrypt("12345667"),

            "fecha_nacimiento" => fake()->date(),
        ];
    }
}
