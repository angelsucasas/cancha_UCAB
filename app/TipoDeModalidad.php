<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_tipo
 * @property int $fk_mod
 * @property Modalidad $modalidad
 */
class TipoDeModalidad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tipo_de_modalidad';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_tipo';

    /**
     * @var array
     */
    protected $fillable = ['fk_mod'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modalidad()
    {
        return $this->belongsTo('App\Modalidad', 'fk_mod', 'cod_mod');
    }
}
