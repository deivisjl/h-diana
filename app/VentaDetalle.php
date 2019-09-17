<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    protected $table='venta_detalle';
    protected $primaryKey = 'id_ventadetalle'; 

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'id_producto', 'id_producto');
    }  

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'id_venta', 'id_venta');
    } 
}
