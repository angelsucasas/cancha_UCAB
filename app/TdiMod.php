<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_tdi_tm
 * @property int $fk_tdi
 * @property int $fk_mod
 * @property TipoDeInvestigacion $tipoDeInvestigacion
 * @property Modalidad $modalidad
 */
class TdiMod extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tdi_mod';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_tdi_tm';

    /**
     * @var array
     */
    protected $fillable = ['fk_tdi', 'fk_mod'];
    public $timestamps = false;

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
    public function modalidad()
    {
        return $this->belongsTo('App\Modalidad', 'fk_mod', 'cod_mod');
    }
}
