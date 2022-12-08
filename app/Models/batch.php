<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function branch()
    {
        return $this->hasMany(Branch::class);
    }
    


    protected $fillable = [
        'course_id', 'code','name', 'status'

    ];
}
