<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'idEmployee';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable = [
        'names',
        'surnames',
        'idDepartment',
        'status',
        'photo_url'
    ];


    /**
     * The "booted" method of the model.
     *
     * This method is called when the model is bootstrapped.
     * We use it to attach model event listeners.
    */
    protected static function booted(): void
    {
        static::creating(function (Employee $employee) {
            // Only generate an ID if it's not already set.
            // This allows seeders or other processes to set specific IDs if needed.
            if (empty($employee->{$employee->getKeyName()})) {
                $lastEmployee = self::orderBy($employee->getKeyName(), 'desc')->first();
                $nextNumber = 1;

                if ($lastEmployee && Str::startsWith($lastEmployee->{$employee->getKeyName()}, 'EMP')) {
                    // Extract the numeric part from the last ID
                    $numericPart = (int) substr($lastEmployee->{$employee->getKeyName()}, 3);
                    $nextNumber = $numericPart + 1;
                }

                // Format the new ID: EMP + 3-digit number with leading zeros
                $employee->{$employee->getKeyName()} = 'EMP' . str_pad((string)$nextNumber, 3, '0', STR_PAD_LEFT);
            }
        });
    }
    

    //Define the inverse of the polymorphic relationship
    public function user()
    {
        return $this->morphOne(User::class,'owner');
    }

    public function pedido()
    {
        return $this->hasMany(Pedido::class,'idEmployee');
    }
}
