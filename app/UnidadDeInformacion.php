<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_udi
 * @property int $fk_ede
 * @property int $fk_pdi
 * @property int $fk_cat
 * @property int $fk_ref
 * @property int $fk_ubi
 * @property int $fk_jus
 * @property string $cita_udi
 * @property EventoDeEstudio $eventoDeEstudio
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 * @property Categorium $categorium
 * @property ReferenciaUdi $referenciaUdi
 * @property UbicacionUdi $ubicacionUdi
 * @property JustificacionUdi $justificacionUdi
 * @property CriterioMetodologico[] $criterioMetodologicos
 * @property Temporalidad[] $temporalidads
 * @property EventoDeEstudio[] $eventoDeEstudios
 * @property UnidadDeEstudio[] $unidadDeEstudios
 * @property Contexto[] $contextos
 * @property TipoDeInvestigacion[] $tipoDeInvestigacions
 */
class UnidadDeInformacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'unidad_de_informacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_udi';

    /**
     * @var array
     */
    protected $fillable = ['fk_ede', 'fk_pdi', 'fk_cat', 'fk_ref', 'fk_ubi', 'fk_jus', 'cita_udi'];
    public $timestamps = false;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorium()
    {
        return $this->belongsTo('App\Categorium', 'fk_cat', 'cod_cat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referenciaUdi()
    {
        return $this->belongsTo('App\ReferenciaUdi', 'fk_ref', 'cod_ref_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ubicacionUdi()
    {
        return $this->belongsTo('App\UbicacionUdi', 'fk_ubi', 'cod_ubi_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function justificacionUdi()
    {
        return $this->belongsTo('App\JustificacionUdi', 'fk_jus', 'cod_jus_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function criterioMetodologicos()
    {
        return $this->hasMany('App\CriterioMetodologico', 'fk_udi', 'cod_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function temporalidads()
    {
        return $this->hasMany('App\Temporalidad', 'fk_udi', 'cod_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventoDeEstudios()
    {
        return $this->hasMany('App\EventoDeEstudio', 'fk_udi', 'cod_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeEstudios()
    {
        return $this->hasMany('App\UnidadDeEstudio', 'fk_udi', 'cod_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contextos()
    {
        return $this->hasMany('App\Contexto', 'fk_udi', 'cod_udi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoDeInvestigacions()
    {
        return $this->hasMany('App\TipoDeInvestigacion', 'fk_udi', 'cod_udi');
    }
}
