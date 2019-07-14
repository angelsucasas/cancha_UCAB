<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_jus_udi
 * @property string $descripcion_jus
 * @property UnidadDeInformacion[] $unidadDeInformacions
 */
class JustificacionUdi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'justificacion_udi';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_jus_udi';

    /**
     * @var array
     */
    protected $fillable = ['descripcion_jus'];
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeInformacions()
    {
        return $this->hasMany('App\UnidadDeInformacion', 'fk_jus', 'cod_jus_udi');
    }
}
