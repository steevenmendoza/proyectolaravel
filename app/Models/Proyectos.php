<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    // $fillable: evitamos asignación masiva.
    protected $fillable = ['nombre_completo', 'email', 'password', 'address', 'city'];
    // Asegúrate de listar todos los campos que deseas que sean asignables masivamente


    // método boot: mientras se esté creando un nuevo proyecto, guardamos el usuario id del momento.
    protected static function boot()
    {
        parent::boot();
    }
}
