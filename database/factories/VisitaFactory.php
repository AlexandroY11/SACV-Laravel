<?php

namespace Database\Factories;

use App\Models\Visita;
use App\Models\Mascota;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VisitaFactory extends Factory
{
    protected $model = Visita::class;

    public function definition()
    {
        return [
            'mascota_id' => Mascota::factory(),
            'fecha_visita' => $this->faker->date(),
            'motivo' => $this->faker->sentence(4),
            'tratamiento' => $this->faker->text,
        ];
    }
}

