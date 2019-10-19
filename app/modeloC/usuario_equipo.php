<?php

namespace App\modeloC;

use Illuminate\Database\Eloquent\Model;

class usuario_equipo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuario_equipo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'codigo_ue';

    /**
     * @var array
     */
    protected $fillable = ['fk_usuario','fk_equipo'];
    public $timestamps = false;
}
