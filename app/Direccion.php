<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table='direccion';
    protected $primaryKey = 'id_direccion';
    
    
    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'cod_ciudad', 'cod_ciudad');
    }

}
