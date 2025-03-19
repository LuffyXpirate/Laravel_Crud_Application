<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['Course_name']; // Ensure this matches your database column

    // ✅ Define the reverse relationship
    public function admissions()
    {
        return $this->hasMany(Admission::class, 'course_id');
    }
}

