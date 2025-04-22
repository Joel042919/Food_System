<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class DetallePedido extends Model
{
    protected $table = 'DetallePedido';
    protected $primaryKey = ['idPedido','idDishes'];
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'price',
        'quantity'
    ];

    public function pedido(){
        return $this->belongsTo(Pedido::class,'idPedido');
    }

    public function pedidoDelivery(){
        return $this->belongsTo(Dishes::class,'idDishes');
    }
}
