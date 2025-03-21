<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Client extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'idClient';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'idClient',
        'names',
        'surnames',
        'picture',
    ];


    //Define the inverse of the polymorphic relationship
    public function user()
    {
        return $this->morphOne(User::class, 'owner');
    }
}
