<?php

namespace App\modeloC;

use Illuminate\Database\Eloquent\Model;

class clasificacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'categoria';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_cat';

    /**
     * @var array
     */
    protected $fillable = ['nombre_cat'];
    public $timestamps = false;

}
