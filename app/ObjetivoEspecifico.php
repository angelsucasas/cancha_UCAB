<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_oe
 * @property int $fk_og
 * @property string $descripcion_oe
 * @property ObjetivoGeneral $objetivoGeneral
 * @property Estadio[] $estadios
 * @property ClaseDeEvento[] $claseDeEventos
 * @property OePdi[] $oePdis
 */
class ObjetivoEspecifico extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'objetivo_especifico';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_oe';

    /**
     * @var array
     */
    protected $fillable = ['fk_og', 'descripcion_oe'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objetivoGeneral()
    {
        return $this->belongsTo('App\ObjetivoGeneral', 'fk_og', 'cod_og');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estadios()
    {
        return $this->hasMany('App\Estadio', 'fk_oe', 'cod_oe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function claseDeEventos()
    {
        return $this->hasMany('App\ClaseDeEvento', 'fk_oe', 'cod_oe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oePdis()
    {
        return $this->hasMany('App\OePdi', 'fk_oe', 'cod_oe');
    }
}
