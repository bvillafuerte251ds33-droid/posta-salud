<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalMedico extends Model
{
    use HasFactory;

    protected $table = 'personal_medico';

    protected $fillable = [
        'user_id',
        'dni',
        'nombres',
        'apellidos',
        'especialidad',
        'colegiatura',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'activo' => 'boolean',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}