<?php

namespace Database\Factories;

use App\Models\Mascota;
use App\Models\Dueño;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MascotaFactory extends Factory
{
    protected $model = Mascota::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'especie' => $this->faker->randomElement(['Perro', 'Gato', 'Pájaro']),
            'raza' => $this->faker->word,
            'edad' => $this->faker->numberBetween(1, 15),
            'dueño_id' => Dueño::factory(),
        ];
    }
}

