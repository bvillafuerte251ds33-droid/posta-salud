<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition(): array
    {
        return [
            'dni' => fake()->unique()->numerify('########'),
            'nombres' => fake()->firstName(),
            'apellidos' => fake()->lastName() . ' ' . fake()->lastName(),
            'fecha_nacimiento' => fake()->dateTimeBetween('-75 years', '-1 year')->format('Y-m-d'),
            'sexo' => fake()->randomElement(['M', 'F']),
            'telefono' => fake()->numerify('9########'),
            'direccion' => fake()->address(),
        ];
    }
}