<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@posta.test',
            'password' => Hash::make('password'),
            'rol' => 'administrador',
        ]);

        User::create([
            'name' => 'Médico',
            'email' => 'medico@posta.test',
            'password' => Hash::make('password'),
            'rol' => 'personal_medico',
        ]);

        User::create([
            'name' => 'Recepcionista',
            'email' => 'recepcion@posta.test',
            'password' => Hash::make('password'),
            'rol' => 'recepcion',
        ]);

        $this->call([
            PersonalMedicoSeeder::class,
            PacienteSeeder::class,
            CitaSeeder::class,
        ]);
    }
}