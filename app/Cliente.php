<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // protected $fillable = ['id_cliente','cliente_nombre', 'cliente_primerApellido', 
    // 'cliente_segundoApellido', 'cliente_direccion', 'cliente_telefono', 
    // 'cliente_correo', 'cliente_nit','asociado_membrecia','created_at','updated_at'];

    protected $guarded=[];

    
    protected $table='clientes';
    protected $primaryKey = 'id_cliente';
}
