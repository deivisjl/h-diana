<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $primaryKey = 'id_venta'; 

    public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'asociado_membrecia', 'asociado_membrecia');
    }   

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id_cliente');
    }  

    

}
