<?php

namespace Database\Seeders;

use App\Models\PersonalMedico;
use App\Models\User;
use Illuminate\Database\Seeder;

class PersonalMedicoSeeder extends Seeder
{
    public function run(): void
    {
        PersonalMedico::factory()->create([
            'user_id' => User::where('email', 'medico@posta.test')->value('id'),
        ]);

        PersonalMedico::factory()->count(4)->create();

        PersonalMedico::factory()->create([
            'activo' => false,
        ]);
    }
}