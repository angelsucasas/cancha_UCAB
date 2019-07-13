<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ubi_udi
 * @property string $descripcion_ubi
 * @property UnidadDeInformacion[] $unidadDeInformacions
 */
class UbicacionUdi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ubicacion_udi';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ubi_udi';

    /**
     * @var array
     */
    protected $fillable = ['descripcion_ubi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeInformacions()
    {
        return $this->hasMany('App\UnidadDeInformacion', 'fk_ubi', 'cod_ubi_udi');
    }
}
