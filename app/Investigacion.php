<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_inv
 * @property string $enunciado_inv
 * @property PreguntaDeInvestigacion[] $preguntaDeInvestigacions
 */
class Investigacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'investigacion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_inv';

    /**
     * @var array
     */
    protected $fillable = ['enunciado_inv'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preguntaDeInvestigacions()
    {
        return $this->hasMany('App\PreguntaDeInvestigacion', 'fk_inv', 'cod_inv');
    }
}
