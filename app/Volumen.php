<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volumen extends Model
{
    protected $table='volumen';
    protected $primaryKey = 'asociado_membrecia'; 

    protected $fillable = ['volumen_p','volumen_l'];

    public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'asociado_membrecia', 'asociado_membrecia');
    } 

}
