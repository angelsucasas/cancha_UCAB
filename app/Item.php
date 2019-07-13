<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ite
 * @property int $fk_par
 * @property int $num_item
 * @property Parametro $parametro
 */
class Item extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'item';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ite';

    /**
     * @var array
     */
    protected $fillable = ['fk_par', 'num_item'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parametro()
    {
        return $this->belongsTo('App\Parametro', 'fk_par', 'cod_par');
    }
}
