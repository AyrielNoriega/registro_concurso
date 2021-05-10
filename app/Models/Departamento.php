<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    /**
     * Get all of the ciudad for the Departamento
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ciudades()
    {
        return $this->hasMany(Ciudad::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
