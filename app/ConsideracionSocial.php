<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_cs
 * @property int $fk_pdi
 * @property string $aporte_nuevos_conocimiento_cs
 * @property string $aplicacion_area_cs
 * @property string $responde_necesidad_cs
 * @property string $impulsa_investigaciones_cs
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 */
class ConsideracionSocial extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'consideracion_social';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_cs';

    /**
     * @var array
     */
    protected $fillable = ['fk_pdi', 'aporte_nuevos_conocimiento_cs', 'aplicacion_area_cs', 'responde_necesidad_cs', 'impulsa_investigaciones_cs'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preguntaDeInvestigacion()
    {
        return $this->belongsTo('App\PreguntaDeInvestigacion', 'fk_pdi', 'cod_pdi');
    }
}
