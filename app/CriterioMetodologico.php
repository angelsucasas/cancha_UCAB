<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_cm
 * @property int $fk_pdi
 * @property int $fk_udi
 * @property string $descripcion_cm
 * @property string $estudio_previo_cm
 * @property string $abordaje_cm
 * @property string $poblacion_accesible_cm
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 * @property UnidadDeInformacion $unidadDeInformacion
 */
class CriterioMetodologico extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'criterio_metodologico';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_cm';

    /**
     * @var array
     */
    protected $fillable = ['fk_pdi', 'fk_udi', 'descripcion_cm', 'estudio_previo_cm', 'abordaje_cm', 'poblacion_accesible_cm'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preguntaDeInvestigacion()
    {
        return $this->belongsTo('App\PreguntaDeInvestigacion', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unidadDeInformacion()
    {
        return $this->belongsTo('App\UnidadDeInformacion', 'fk_udi', 'cod_udi');
    }
}
