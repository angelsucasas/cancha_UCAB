<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_tdi
 * @property int $fk_pdi
 * @property int $fk_udi
 * @property string $nombre_tdi
 * @property string $descripcion_tdi
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 * @property UnidadDeInformacion $unidadDeInformacion
 * @property TipoDeNivel[] $tipoDeNivels
 * @property ObjetivoGeneral[] $objetivoGenerals
 * @property TdiMod[] $tdiMods
 */
class TipoDeInvestigacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tipo_de_investigacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_tdi';

    /**
     * @var array
     */
    protected $fillable = ['fk_pdi', 'fk_udi', 'nombre_tdi', 'descripcion_tdi'];

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
    public function unidadDeInformacion()
    {
        return $this->belongsTo('App\UnidadDeInformacion', 'fk_udi', 'cod_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoDeNivels()
    {
        return $this->hasMany('App\TipoDeNivel', 'fk_tdi', 'cod_tdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objetivoGenerals()
    {
        return $this->hasMany('App\ObjetivoGeneral', 'fk_tdi', 'cod_tdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tdiMods()
    {
        return $this->hasMany('App\TdiMod', 'fk_tdi', 'cod_tdi');
    }
}
