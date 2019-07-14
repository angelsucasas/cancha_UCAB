<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_cat
 * @property string $nombre_cat
 * @property UnidadDeInformacion[] $unidadDeInformacions
 */
class Categoria extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'categoria';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_cat';

    /**
     * @var array
     */
    protected $fillable = ['nombre_cat'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unidadDeInformacions()
    {
        return $this->hasMany('App\UnidadDeInformacion', 'fk_cat', 'cod_cat');
    }
}
