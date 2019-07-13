<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cod_ins
 * @property string $nombre_ins
 * @property string $descripcion_ins
 * @property Fuente[] $fuentes
 * @property EventoDeEstudio[] $eventoDeEstudios
 */
class Instrumento extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'instrumento';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cod_ins';

    /**
     * @var array
     */
    protected $fillable = ['nombre_ins', 'descripcion_ins'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fuentes()
    {
        return $this->hasMany('App\Fuente', 'fk_ins', 'cod_ins');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventoDeEstudios()
    {
        return $this->hasMany('App\EventoDeEstudio', 'fk_ins', 'cod_ins');
    }
}
