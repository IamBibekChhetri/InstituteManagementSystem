<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }


    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }


    protected $fillable = [
        'batch_id', 'student_id','instructor_id' , 'name' , 'address', 'panVat', 'phone', 'email', 'status'

    ];
}
