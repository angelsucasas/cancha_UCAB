<?php
 
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password',];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'fk_rol', 'cod_rol');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enteGubernamentals()
    {
        return $this->hasMany('App\EnteGubernamental', 'fk_use');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function investigacions()
    {
        return $this->hasMany('App\Investigacion', 'fk_use');
    }
}

