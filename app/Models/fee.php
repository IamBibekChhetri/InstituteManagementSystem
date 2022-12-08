<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    protected $fillable = [
        'course_id', 'amount', 'status'

    ];
}
