<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_fac
 * @property int $fk_pdi
 * @property string $descripcion_fac
 * @property string $nivel_fac
 * @property PreguntaDeInvestigacion $preguntaDeInvestigacion
 */
class Factibilidad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'factibilidad';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_fac';

    /**
     * @var array
     */
    protected $fillable = ['fk_pdi', 'descripcion_fac', 'nivel_fac'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function preguntaDeInvestigacion()
    {
        return $this->belongsTo('App\PreguntaDeInvestigacion', 'fk_pdi', 'cod_pdi');
    }
}
