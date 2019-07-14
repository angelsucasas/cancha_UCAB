<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_pob
 * @property int $fk_tdm
 * @property string $descripcion_pob
 * @property TecnicaDeMuestreo $tecnicaDeMuestreo
 * @property UnidadDeEstudio[] $unidadDeEstudios
 */
class Poblacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'poblacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_pob';

    /**
     * @var array
     */
    protected $fillable = ['fk_tdm', 'descripcion_pob'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tecnicaDeMuestreo()
    {
        return $this->belongsTo('App\TecnicaDeMuestreo', 'fk_tdm', 'cod_tdm');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeEstudios()
    {
        return $this->hasMany('App\UnidadDeEstudio', 'fk_pob', 'cod_pob');
    }
}
