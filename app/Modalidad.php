<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_mod
 * @property string $descripcion_mod
 * @property TipoDeModalidad[] $tipoDeModalidads
 * @property TdiMod[] $tdiMods
 */
class Modalidad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'modalidad';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_mod';

    /**
     * @var array
     */
    protected $fillable = ['descripcion_mod'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoDeModalidads()
    {
        return $this->hasMany('App\TipoDeModalidad', 'fk_mod', 'cod_mod');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tdiMods()
    {
        return $this->hasMany('App\TdiMod', 'fk_mod', 'cod_mod');
    }
}
