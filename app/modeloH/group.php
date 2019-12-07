<?php

namespace App\modeloH;


use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    protected $table = 'groups';

    protected $primaryKey = 'id';

    protected $fillable = ['subject_id','gpo','profesor','horario','dias'];
    public $timestamps = false;
    
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
