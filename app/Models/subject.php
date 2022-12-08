<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }


    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    protected $fillable = [
        'batch_id', 'course_id', 'name', 'status'

    ];
}
