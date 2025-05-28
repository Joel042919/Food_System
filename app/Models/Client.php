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
        'names',
        'surnames',
        'picture',
    ];

    /**
     * The "booted" method of the model.
     *
     * This method is called when the model is bootstrapped.
     * We use it to attach model event listeners.
    */
    protected static function booted(): void
    {
        static::creating(function (Cliente $client) {
            // Only generate an ID if it's not already set.
            // This allows seeders or other processes to set specific IDs if needed.
            if (empty($client->{$client->getKeyName()})) {
                $lastclient = self::orderBy($client->getKeyName(), 'desc')->first();
                $nextNumber = 1;

                if ($lastclient && Str::startsWith($lastclient->{$client->getKeyName()}, 'CLI')) {
                    // Extract the numeric part from the last ID
                    $numericPart = (int) substr($lastclient->{$client->getKeyName()}, 3);
                    $nextNumber = $numericPart + 1;
                }

                // Format the new ID: EMP + 3-digit number with leading zeros
                $client->{$client->getKeyName()} = 'CLI' . str_pad((string)$nextNumber, 3, '0', STR_PAD_LEFT);
            }
        });
    }


    //Define the inverse of the polymorphic relationship
    public function user()
    {
        return $this->morphOne(User::class, 'owner');
    }
}
