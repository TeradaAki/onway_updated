<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer'; // Specify the table name
    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'password',
        'address',
        'validID',
        'idImage'
    ];

    protected $primaryKey = 'customer_id';
}
