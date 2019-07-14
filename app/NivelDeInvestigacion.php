<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ndi
 * @property string $descripcion_ndi
 * @property TipoDeNivel[] $tipoDeNivels
 */
class NivelDeInvestigacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nivel_de_investigacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ndi';

    /**
     * @var array
     */
    protected $fillable = ['descripcion_ndi'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoDeNivels()
    {
        return $this->hasMany('App\TipoDeNivel', 'fk_ndi', 'cod_ndi');
    }
}
