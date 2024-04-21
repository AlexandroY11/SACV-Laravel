<?php

namespace Database\Factories;

use App\Models\Dueño;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DueñoFactory extends Factory
{
    protected $model = Dueño::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'direccion' => $this->faker->streetAddress,
            'telefono' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
