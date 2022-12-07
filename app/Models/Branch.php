<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    public function batch()
    {
        return $this->belongsTo(batch::class);
    }

    public function student()
    {
        return $this->belongsTo(student::class);
    }


    public function instructor()
    {
        return $this->belongsTo(instructor::class);
    }


    protected $fillable = [
        'batch_id', 'student_id','instructor_id' , 'name' , 'address', 'panVat', 'phone', 'status'

    ];
}
