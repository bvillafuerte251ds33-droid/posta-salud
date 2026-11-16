<?php

namespace Database\Factories;

use App\Models\Cita;
use App\Models\Paciente;
use App\Models\PersonalMedico;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    protected $model = Cita::class;

    public function definition(): array
    {
        $fecha = fake()->dateTimeBetween('now', '+30 days');

        return [
            'paciente_id' => Paciente::factory(),
            'personal_medico_id' => PersonalMedico::factory(),
            'fecha_hora' => $fecha,
            'fecha_hora_fin' => (clone $fecha)->modify('+30 minutes'),
            'motivo' => fake()->sentence(6),
            'estado' => fake()->randomElement([
                'pendiente',
                'confirmada',
                'atendida',
                'cancelada',
            ]),
        ];
    }
}