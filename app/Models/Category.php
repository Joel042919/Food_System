<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'idCategory';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'category',
        'categoryUrl'
    ];

    public function dishes(){
        return $this->hasMany(Dishes::class,'idCategory');
    }
}
