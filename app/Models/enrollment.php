<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    public function course()
    {
        return $this->belongsTo(course::class);
    }
    
    public function student()
    {
        return $this->belongsTo(student::class);
    }

    protected $fillable = [
        'course_id', 'student_id' 

    ];
}
