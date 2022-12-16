<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function className()
    {
        return $this->belongsTo(ClassName::class);
    }
    
    protected $fillable = [
        'instructor_id', 'batch_id', 'student_id', 'className_id', 'classroom', 'status'

   ];
}
