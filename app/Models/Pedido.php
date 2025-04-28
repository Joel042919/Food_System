<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\BelongsTo;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'idPedido';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'idMesa',
        'fechaPedido',
        'details',
        'idEmployee'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class,'idEmployee');
    }

    public function detallePedido(){
        return $this->hasMany(DetallePedido::class,'idPedido');
    }

    public function mesa(){
        return $this->belongsTo(Mesa::class,'idMesa');
    }

    public function pago(){
        return $this->hasMany(Pago::class,'idPedido');
    }
}
