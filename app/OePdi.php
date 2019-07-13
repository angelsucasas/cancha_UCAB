<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_oe_pdi
 * @property int $fk_oe
 * @property int $fk_pdi
 * @property ObjetivoEspecifico $objetivoEspecifico
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 */
class OePdi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'oe_pdi';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_oe_pdi';

    /**
     * @var array
     */
    protected $fillable = ['fk_oe', 'fk_pdi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objetivoEspecifico()
    {
        return $this->belongsTo('App\ObjetivoEspecifico', 'fk_oe', 'cod_oe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preguntaDeInvestigacion()
    {
        return $this->belongsTo('App\PreguntaDeInvestigacion', 'fk_pdi', 'cod_pdi');
    }
}
