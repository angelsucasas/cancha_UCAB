<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_mue
 * @property string $descripcion_mue
 * @property TecnicaDeMuestreo[] $tecnicaDeMuestreos
 */
class Muestra extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'muestra';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_mue';

    /**
     * @var array
     */
    protected $fillable = ['descripcion_mue'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tecnicaDeMuestreos()
    {
        return $this->hasMany('App\TecnicaDeMuestreo', 'fk_mue', 'cod_mue');
    }
}
