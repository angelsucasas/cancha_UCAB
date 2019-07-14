<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ede
 * @property int $fk_ins
 * @property string $nombre_ede
 * @property string $descripcion_ede
 * @property Instrumento $instrumento
 * @property EdePdi[] $edePdis
 * @property Sinergium[] $sinergias
 * @property Temporalidad[] $temporalidads
 * @property UnidadDeInformacion[] $unidadDeInformacions
 */
class EventoDeEstudio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'evento_de_estudio';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ede';

    /**
     * @var array
     */
    protected $fillable = ['fk_ins', 'nombre_ede', 'descripcion_ede'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instrumento()
    {
        return $this->belongsTo('App\Instrumento', 'fk_ins', 'cod_ins');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function edePdis()
    {
        return $this->hasMany('App\EdePdi', 'fk_ede', 'cod_ede');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sinergias()
    {
        return $this->hasMany('App\Sinergium', 'fk_ede', 'cod_ede');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function temporalidads()
    {
        return $this->hasMany('App\Temporalidad', 'fk_ede', 'cod_ede');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeInformacions()
    {
        return $this->hasMany('App\UnidadDeInformacion', 'fk_ede', 'cod_ede');
    }
}
