<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salas extends Model
{
    use HasFactory;
    protected $fillable = ['id_sala','bloque_sala','piso_sala','aula_sala','cantidad_equipos_sala'];
}
