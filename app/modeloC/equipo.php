<?php

namespace App\modeloC;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'equipo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'codigo_equipo';

    /**
     * @var array
     */
    protected $fillable = ['nombre'];
    public $timestamps = false;
}
