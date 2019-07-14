<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_pdi_con
 * @property int $fk_pdi
 * @property int $fk_con
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 * @property Contexto $contexto
 */
class PdiCon extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pdi_con';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_pdi_con';

    /**
     * @var array
     */
    protected $fillable = ['fk_pdi', 'fk_con'];
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
    public function contexto()
    {
        return $this->belongsTo('App\Contexto', 'fk_con', 'cod_con');
    }
}
