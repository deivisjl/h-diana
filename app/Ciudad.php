<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table='ciudad';
    protected $primaryKey = 'cod_ciudad'; 

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'cod_pais', 'cod_pais');
    }
}
