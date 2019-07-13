<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_fue
 * @property int $fk_ins
 * @property string $descripcion_fue
 * @property Instrumento $instrumento
 */
class Fuente extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'fuente';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_fue';

    /**
     * @var array
     */
    protected $fillable = ['fk_ins', 'descripcion_fue'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instrumento()
    {
        return $this->belongsTo('App\Instrumento', 'fk_ins', 'cod_ins');
    }
}
