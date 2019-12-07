<?php

namespace App\modeloC;

use Illuminate\Database\Eloquent\Model;

class torneom extends Model
{
    protected $table = 'torneo';

    protected $primaryKey = 'codigo_torneo';

    protected $fillable = ['nombre'];
    public $timestamps = false;
   
}
