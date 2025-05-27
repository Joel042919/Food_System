<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class DetallePedido extends Model
{
    protected $table = 'DetallePedido';
    protected $primaryKey = 'idDetallePedido';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'idPedido',
        'idDishes',
        'price',
        'quantity'
    ];

    public function pedido(){
        return $this->belongsTo(Pedido::class,'idPedido');
    }

    public function dishes(){
        return $this->belongsTo(Dishes::class,'idDishes');
    }
}
