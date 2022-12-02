<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function batch()
    {
        return $this->belongsTo(batch::class);
    }

    public function course()
    {
        return $this->belongsTo(course::class);
    }


    public function subject()
    {
        return $this->belongsTo(subject::class);
    }


    public function author()
    {
        return $this->belongsTo(author::class);
    }


    protected $fillable = [
        'batch_id', 'course_id','subject_id' , 'author_id' , 'name' , 'details', 'published', 'status'

    ];
}
