<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'phone', 'email', 'course_id'];

    // ✅ Define the relationship with Course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
