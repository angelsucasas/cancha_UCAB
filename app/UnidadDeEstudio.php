<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ude
 * @property int $fk_pob
 * @property int $fk_udi
 * @property string $descripcion_ude
 * @property string $nombre_ude
 * @property Poblacion $poblacion
 * @property UnidadDeInformacion $unidadDeInformacion
 * @property PdiUde[] $pdiUdes
 */
class UnidadDeEstudio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'unidad_de_estudio';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ude';

    /**
     * @var array
     */
    protected $fillable = ['fk_pob', 'fk_udi', 'descripcion_ude', 'nombre_ude'];
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poblacion()
    {
        return $this->belongsTo('App\Poblacion', 'fk_pob', 'cod_pob');
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
    public function pdiUdes()
    {
        return $this->hasMany('App\PdiUde', 'fk_ude', 'cod_ude');
    }
}
