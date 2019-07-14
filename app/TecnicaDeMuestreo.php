<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_tdm
 * @property int $fk_mue
 * @property string $descripcion_tdm
 * @property Muestra $muestra
 * @property Poblacion[] $poblacions
 */
class TecnicaDeMuestreo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tecnica_de_muestreo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_tdm';

    /**
     * @var array
     */
    protected $fillable = ['fk_mue', 'descripcion_tdm'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function muestra()
    {
        return $this->belongsTo('App\Muestra', 'fk_mue', 'cod_mue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function poblacions()
    {
        return $this->hasMany('App\Poblacion', 'fk_tdm', 'cod_tdm');
    }
}
