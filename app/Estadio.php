<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_est
 * @property int $fk_oe
 * @property string $descripcion_est
 * @property string $recorrido_est
 * @property ObjetivoEspecifico $objetivoEspecifico
 */
class Estadio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'estadio';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_est';

    /**
     * @var array
     */
    protected $fillable = ['fk_oe', 'descripcion_est', 'recorrido_est'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objetivoEspecifico()
    {
        return $this->belongsTo('App\ObjetivoEspecifico', 'fk_oe', 'cod_oe');
    }
}
