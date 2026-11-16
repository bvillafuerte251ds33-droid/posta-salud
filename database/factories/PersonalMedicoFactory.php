<?php

namespace Database\Factories;

use App\Models\PersonalMedico;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalMedicoFactory extends Factory
{
    protected $model = PersonalMedico::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'dni' => fake()->unique()->numerify('########'),
            'nombres' => fake()->firstName(),
            'apellidos' => fake()->lastName() . ' ' . fake()->lastName(),
            'especialidad' => fake()->randomElement([
                'Medicina general',
                'Pediatría',
                'Odontología',
                'Enfermería',
            ]),
            'colegiatura' => fake()->unique()->numerify('##########'),
            'activo' => true,
        ];
    }
}