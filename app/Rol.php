<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_rol
 * @property string $nombre_rol
 * @property string $descripcion_rol
 * @property Usuario[] $usuarios
 * @property RolPer[] $rolPers
 */
class Rol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rol';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_rol';

    /**
     * @var array
     */
    protected $fillable = ['nombre_rol', 'descripcion_rol'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Usuario', 'fk_rol', 'cod_rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rolPers()
    {
        return $this->hasMany('App\RolPer', 'fk_rol', 'cod_rol');
    }
}
