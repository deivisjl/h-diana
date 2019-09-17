<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table='compra';
    protected $primaryKey = 'id_compra'; 

    protected $fillable = ['asociado_membrecia', 'compra_total', 'compra_totalVolumen','compra_envio'];

     public function asociado()
    {
        return $this->belongsTo(Asociado::class, 'asociado_membrecia', 'asociado_membrecia');
    } 
}
