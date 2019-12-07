<?php

namespace App\modeloC;

use Illuminate\Database\Eloquent\Model;

class suscripcion extends Model
{
    protected $table = 'suscripcion';

    protected $primaryKey = 'codigo_suscripcion';

    protected $fillable = ['fk_usuario','fk_gimnasio','fk_plan'];
    public $timestamps = false;
}
