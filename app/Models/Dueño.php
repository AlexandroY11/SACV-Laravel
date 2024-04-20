<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dueño extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'direccion', 'telefono', 'email'];

    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
}

