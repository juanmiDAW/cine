<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Proyeccion extends Model
{
    /** @use HasFactory<\Database\Factories\ProyeccionFactory> */
    use HasFactory;

    protected $fillable = ['prelicula_id', 'fecha_hora', 'sala_id'];

    public function peliculla(){
        return $this->belongsTo(Pelicula::class);
    }

    public function sala(){
        return $this->belongsTo(Sala::class);
    }

    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
