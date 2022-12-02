<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public function batch()
    {
        return $this->belongsTo(batch::class);
    }


    public function course()
    {
        return $this->belongsTo(course::class);
    }

    protected $fillable = [
        'batch_id', 'course_id', 'name', 'status'

    ];
}
