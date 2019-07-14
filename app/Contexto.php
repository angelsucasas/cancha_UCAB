<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_con
 * @property int $fk_udi
 * @property string $nombre_con
 * @property string $descripcion_con
 * @property UnidadDeInformacion $unidadDeInformacion
 * @property PdiCon[] $pdiCons
 */
class Contexto extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'contexto';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_con';

    /**
     * @var array
     */
    protected $fillable = ['fk_udi', 'nombre_con', 'descripcion_con'];
    public $timestamps = false;
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
    public function pdiCons()
    {
        return $this->hasMany('App\PdiCon', 'fk_con', 'cod_con');
    }
}
