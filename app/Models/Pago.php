<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';
    protected $primaryKey = 'idPago';
    
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'montoAPagar',
        'idPedido',
        'fechaPago',
        'idTipoPago'
    ];

    public function pedido(){
        return $this->belongsTo(Pedido::class,'idPedido');
    }
}
