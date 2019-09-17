<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraDetalle extends Model
{
    protected $table='compradetalle';
    protected $primaryKey = 'id_compradetalle'; 

    protected $fillable = ['id_producto', 'id_compra', 'producto_precio','producto_volumen','producto_cantidad'];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'id_compra', 'id_compra');
    } 

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'id_producto', 'id_producto');
    } 
}
