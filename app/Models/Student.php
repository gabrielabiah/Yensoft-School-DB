<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_id',
        'parent_id', 
        'student_firstname', 
        'student_lastname', 
        'student_othername', 
        'student_gender', 
        'student_date_of_birth', 
        'student_parent_name', 
        'student_photo_url', 
        'student_postal_address', 
        'student_mobile', 
        'student_region',
        'student_hometown', 
        'student_class', 
        'student_house',
        'student_religion', 
        'year_of_admission',
        'admission_status', 
    ];
}
