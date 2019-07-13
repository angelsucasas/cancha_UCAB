<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ede_pdi
 * @property int $fk_ede
 * @property int $fk_pdi
 * @property EventoDeEstudio $eventoDeEstudio
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 */
class EdePdi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ede_pdi';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ede_pdi';

    /**
     * @var array
     */
    protected $fillable = ['fk_ede', 'fk_pdi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventoDeEstudio()
    {
        return $this->belongsTo('App\EventoDeEstudio', 'fk_ede', 'cod_ede');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preguntaDeInvestigacion()
    {
        return $this->belongsTo('App\PreguntaDeInvestigacion', 'fk_pdi', 'cod_pdi');
    }
}
