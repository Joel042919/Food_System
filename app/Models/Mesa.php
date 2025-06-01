<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesa';
    protected $primaryKey = 'idMesa';
    protected $keyType = 'int';
    public $incrementing=true;
    public $timestamps=true;

    protected $fillable = [
        'mesa'
    ];

    public function pedido(){
        return $this->hasMany(Pedido::class,'idMesa');
    }
}
