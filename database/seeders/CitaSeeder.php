<?php

namespace Database\Seeders;

use App\Models\Cita;
use App\Models\Paciente;
use App\Models\PersonalMedico;
use Illuminate\Database\Seeder;

class CitaSeeder extends Seeder
{
    public function run(): void
    {
        $pacientes = Paciente::pluck('id');
        $personal = PersonalMedico::where('activo', true)->pluck('id');

        Cita::factory(100)->create([
            'paciente_id' => fn () => $pacientes->random(),
            'personal_medico_id' => fn () => $personal->random(),
        ]);
    }
}