<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_sin
 * @property int $fk_ede
 * @property string $nombre_sin
 * @property string $descripcion_sin
 * @property int $fk_ude
 * @property EventoDeEstudio $eventoDeEstudio
 * @property Indicio[] $indicios
 */
class Sinergia extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sinergia';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_sin';

    /**
     * @var array
     */
    protected $fillable = ['fk_ede', 'nombre_sin', 'descripcion_sin', 'fk_ude'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventoDeEstudio()
    {
        return $this->belongsTo('App\EventoDeEstudio', 'fk_ede', 'cod_ede');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicios()
    {
        return $this->hasMany('App\Indicio', 'fk_sin', 'cod_sin');
    }
}
