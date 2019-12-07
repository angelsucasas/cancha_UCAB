<?php

namespace App\modeloC;

use Illuminate\Database\Eloquent\Model;

class gimnasio extends Model
{
    protected $table = 'ronda';

    protected $primaryKey = 'codigo_ronda';

    protected $fillable = ['fk_equipo_1','fk_equipo_2','fk_torneo','emparejamiento_ronda'];
    public $timestamps = false;
}
