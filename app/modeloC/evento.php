<?php

namespace App\modeloC;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $table = 'evento';

    protected $primaryKey = 'codigo_evento';

    protected $fillable = ['nombre','dia_inicio','mes_inicio','año_inicio','fk_deporte','host','descripcion'];
    public $timestamps = false;
}
