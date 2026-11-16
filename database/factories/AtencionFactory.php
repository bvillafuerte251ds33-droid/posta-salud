<?php

namespace Database\Factories;

use App\Models\Atencion;
use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

class AtencionFactory extends Factory
{
    protected $model = Atencion::class;

    public function definition(): array
    {
        return [
            'cita_id' => Cita::factory(),
            'diagnostico' => fake()->sentence(10),
            'tratamiento' => fake()->sentence(12),
            'observaciones' => fake()->optional()->sentence(10),
        ];
    }
}