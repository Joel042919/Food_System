<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'idEmployee';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable = [
        'idEmployee',
        'names',
        'surnames',
        'idDepartment',
        'status',
    ];

    //Define the inverse of the polymorphic relationship
    public function user()
    {
        return $this->morphOne(User::class,'owner');
    }
}
