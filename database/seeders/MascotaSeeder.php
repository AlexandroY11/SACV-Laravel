<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mascota;

class MascotaSeeder extends Seeder
{
    public function run()
    {
        Mascota::factory(20)->create();
    }
}
