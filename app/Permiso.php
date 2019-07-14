<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_per
 * @property string $nombre_per
 * @property string $descripcion_per
 * @property RolPer[] $rolPers
 */
class Permiso extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'permiso';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_per';

    /**
     * @var array
     */
    protected $fillable = ['nombre_per', 'descripcion_per'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rolPers()
    {
        return $this->hasMany('App\RolPer', 'fk_per', 'cod_per');
    }
}
