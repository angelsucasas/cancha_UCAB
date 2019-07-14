<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ref_udi
 * @property string $descripcion_ref
 * @property UnidadDeInformacion[] $unidadDeInformacions
 */
class ReferenciaUdi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'referencia_udi';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ref_udi';

    /**
     * @var array
     */
    protected $fillable = ['descripcion_ref'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeInformacions()
    {
        return $this->hasMany('App\UnidadDeInformacion', 'fk_ref', 'cod_ref_udi');
    }
}
