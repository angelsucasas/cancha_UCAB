<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_pdi
 * @property int $fk_inv
 * @property string $pregunta_pdi
 * @property Investigacion $investigacion
 * @property CriterioMetodologico[] $criterioMetodologicos
 * @property Factibilidad[] $factibilidads
 * @property OePdi[] $oePdis
 * @property EdePdi[] $edePdis
 * @property PdiUde[] $pdiUdes
 * @property PdiCon[] $pdiCons
 * @property UnidadDeInformacion[] $unidadDeInformacions
 * @property ConsideracionSocial[] $consideracionSocials
 * @property ConsideracionPersonal[] $consideracionPersonals
 * @property TipoDeInvestigacion[] $tipoDeInvestigacions
 */
class PreguntaDeInvestigacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pregunta_de_investigacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_pdi';

    /**
     * @var array
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investigacion()
    {
        return $this->belongsTo('App\Investigacion', 'fk_inv', 'cod_inv');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function criterioMetodologicos()
    {
        return $this->hasMany('App\CriterioMetodologico', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factibilidads()
    {
        return $this->hasMany('App\Factibilidad', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oePdis()
    {
        return $this->hasMany('App\OePdi', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function edePdis()
    {
        return $this->hasMany('App\EdePdi', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pdiUdes()
    {
        return $this->hasMany('App\PdiUde', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pdiCons()
    {
        return $this->hasMany('App\PdiCon', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeInformacions()
    {
        return $this->hasMany('App\UnidadDeInformacion', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consideracionSocials()
    {
        return $this->hasMany('App\ConsideracionSocial', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consideracionPersonals()
    {
        return $this->hasMany('App\ConsideracionPersonal', 'fk_pdi', 'cod_pdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoDeInvestigacions()
    {
        return $this->hasMany('App\TipoDeInvestigacion', 'fk_pdi', 'cod_pdi');
    }
}
