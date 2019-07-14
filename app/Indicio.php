<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ind
 * @property int $fk_sin
 * @property string $nombre_ind
 * @property string $descripcion_ind
 * @property Sinergium $sinergium
 * @property Parametro[] $parametros
 */
class Indicio extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'indicio';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ind';

    /**
     * @var array
     */
    protected $fillable = ['fk_sin', 'nombre_ind', 'descripcion_ind'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sinergium()
    {
        return $this->belongsTo('App\Sinergium', 'fk_sin', 'cod_sin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parametros()
    {
        return $this->hasMany('App\Parametro', 'fk_ind', 'cod_ind');
    }
}
