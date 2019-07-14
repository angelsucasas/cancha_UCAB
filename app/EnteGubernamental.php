<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_eg
 * @property int $fk_usu
 * @property string $descripcion_eg
 * @property Usuario $usuario
 */
class EnteGubernamental extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ente_gubernamental';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_eg';

    /**
     * @var array
     */
    protected $fillable = ['fk_usu', 'descripcion_eg'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'fk_usu', 'cod_usu');
    }
}
