<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $fk_rol
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Rol $rol
 * @property EnteGubernamental[] $enteGubernamentals
 * @property Investigacion[] $investigacions
 */
class User extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['fk_rol', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'fk_rol', 'cod_rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enteGubernamentals()
    {
        return $this->hasMany('App\EnteGubernamental', 'fk_use');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function investigacions()
    {
        return $this->hasMany('App\Investigacion', 'fk_use');
    }
}
