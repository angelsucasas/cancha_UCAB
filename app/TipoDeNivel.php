<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_tn
 * @property int $fk_tdi
 * @property int $fk_ndi
 * @property TipoDeInvestigacion $tipoDeInvestigacion
 * @property NivelDeInvestigacion $nivelDeInvestigacion
 */
class TipoDeNivel extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tipo_de_nivel';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_tn';

    /**
     * @var array
     */
    protected $fillable = ['fk_tdi', 'fk_ndi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoDeInvestigacion()
    {
        return $this->belongsTo('App\TipoDeInvestigacion', 'fk_tdi', 'cod_tdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivelDeInvestigacion()
    {
        return $this->belongsTo('App\NivelDeInvestigacion', 'fk_ndi', 'cod_ndi');
    }
}
