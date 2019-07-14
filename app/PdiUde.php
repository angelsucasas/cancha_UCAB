<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_pdi_ude
 * @property int $fk_pdi
 * @property int $fk_ude
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 * @property UnidadDeEstudio $unidadDeEstudio
 */
class PdiUde extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pdi_ude';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_pdi_ude';

    /**
     * @var array
     */
    protected $fillable = ['fk_pdi', 'fk_ude'];
    public $timestamps = false;

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
    public function unidadDeEstudio()
    {
        return $this->belongsTo('App\UnidadDeEstudio', 'fk_ude', 'cod_ude');
    }
}
