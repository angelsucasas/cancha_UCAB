<?php

namespace App\modeloH;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $table = 'subjects';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre','fk_deporte','host','descripcion'];
    public $timestamps = false;
    
    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
