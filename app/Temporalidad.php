<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_tem
 * @property int $fk_ede
 * @property int $fk_udi
 * @property string $fecha_tem
 * @property EventoDeEstudio $eventoDeEstudio
 * @property UnidadDeInformacion $unidadDeInformacion
 */
class Temporalidad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'temporalidad';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_tem';

    /**
     * @var array
     */
    protected $fillable = ['fk_ede', 'fk_udi', 'fecha_tem'];
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
    public function unidadDeInformacion()
    {
        return $this->belongsTo('App\UnidadDeInformacion', 'fk_udi', 'cod_udi');
    }
}
