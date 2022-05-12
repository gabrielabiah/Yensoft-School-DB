<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable=[
        'postal_address', 
        'gps_address',
        'school_id', 
        'user_id',

    ]; 
}
