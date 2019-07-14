<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_og
 * @property int $fk_tdi
 * @property string $descripcion_og
 * @property string $nivel_og
 * @property TipoDeInvestigacion $tipoDeInvestigacion
 * @property ObjetivoEspecifico[] $objetivoEspecificos
 */
class ObjetivoGeneral extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'objetivo_general';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_og';

    /**
     * @var array
     */
    protected $fillable = ['fk_tdi', 'descripcion_og', 'nivel_og'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoDeInvestigacion()
    {
        return $this->belongsTo('App\TipoDeInvestigacion', 'fk_tdi', 'cod_tdi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objetivoEspecificos()
    {
        return $this->hasMany('App\ObjetivoEspecifico', 'fk_og', 'cod_og');
    }
}
