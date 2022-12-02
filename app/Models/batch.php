<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batch extends Model
{
    public function course()
    {
        return $this->belongsTo(course::class);
    }
    


    protected $fillable = [
        'course_id', 'code','name', 'status'

    ];
}
