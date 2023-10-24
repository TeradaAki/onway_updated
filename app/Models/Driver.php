<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'driver';
    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'vehicleType',
        'password',
        'address',
        'license'
    ];

    protected $primaryKey = 'driver_id';
}
