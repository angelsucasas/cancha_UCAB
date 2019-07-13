<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_par
 * @property int $fk_ind
 * @property string $muestra_par
 * @property Indicio $indicio
 * @property Item[] $items
 */
class Parametro extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'parametro';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_par';

    /**
     * @var array
     */
    protected $fillable = ['fk_ind', 'muestra_par'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function indicio()
    {
        return $this->belongsTo('App\Indicio', 'fk_ind', 'cod_ind');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany('App\Item', 'fk_par', 'cod_par');
    }
}
