<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_cp
 * @property int $fk_pdi
 * @property string $relacion_tema_expectativa
 * @property string $interes_del_investigador_cp
 * @property string $estudios_previos_cp
 * @property string $acceso_informacion_cp
 * @property string $tiempo_recursos_cp
 * @property string $asesoria_orientacion_cp
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 */
class ConsideracionPersonal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'consideracion_personal';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_cp';

    /**
     * @var array
     */

    //protected $fillable = ['fk_pdi', 'relacion_tema_expectativa', 'interes_del_investigador_cp', 'estudios_previos_cp', 'acceso_informacion_cp', 'tiempo_recursos_cp', 'asesoria_orientacion_cp'];
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preguntaDeInvestigacion()
    {
        return $this->belongsTo('App\PreguntaDeInvestigacion', 'fk_pdi', 'cod_pdi');
    }
}
