<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    protected $table = 'dishes';
    protected $primaryKey = 'idDishes';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'disName',
        'price',
        'idCategory',
        'status',
        'dishImg',
        'details'
    ];


    public function category(){
        return $this->belongsTo(Category::class,'idCategory');
    }

}
