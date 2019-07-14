<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_rp
 * @property int $fk_rol
 * @property int $fk_per
 * @property Rol $rol
 * @property Permiso $permiso
 */
class RolPer extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rol_per';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_rp';

    /**
     * @var array
     */
    protected $fillable = ['fk_rol', 'fk_per'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'fk_rol', 'cod_rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permiso()
    {
        return $this->belongsTo('App\Permiso', 'fk_per', 'cod_per');
    }
}
