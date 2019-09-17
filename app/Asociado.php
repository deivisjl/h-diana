<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    protected $guarded=[];
    
    protected $table='asociados';
    protected $primaryKey = 'asociado_membrecia';

    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'id_nivel', 'id_nivel');
    }  

    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'id_direccion', 'id_direccion');
    } 

    public function volumen()
    {
        return $this->belongsTo(Volumen::class, 'asociado_membrecia', 'asociado_membrecia');
    }  

    public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'padre', 'asociado_membrecia');
    } 
    
   
}
