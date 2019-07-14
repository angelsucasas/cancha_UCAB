<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_cde
 * @property int $fk_oe
 * @property string $nombre_cde
 * @property ObjetivoEspecifico $objetivoEspecifico
 */
class ClaseDeEvento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'clase_de_evento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_cde';

    /**
     * @var array
     */
    protected $fillable = ['fk_oe', 'nombre_cde'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function objetivoEspecifico()
    {
        return $this->belongsTo('App\ObjetivoEspecifico', 'fk_oe', 'cod_oe');
    }
}
