<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_inv
 * @property int $fk_use
 * @property string $enunciado_inv
 * @property User $user
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
    protected $fillable = ['fk_use', 'enunciado_inv'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'fk_use');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preguntaDeInvestigacions()
    {
        return $this->hasMany('App\PreguntaDeInvestigacion', 'fk_inv', 'cod_inv');
    }
}
