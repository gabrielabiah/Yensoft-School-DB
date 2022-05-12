<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\SchoolScope;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'class_name',
        'class_description',
        'class_department',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new SchoolScope);
    }
}
