<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dueño;

class DueñoSeeder extends Seeder
{
    public function run()
    {
        Dueño::factory(10)->create();
        
    }
}
