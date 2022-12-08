<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }


    public function author()
    {
        return $this->belongsTo(Author::class);
    }


    protected $fillable = [
        'batch_id', 'course_id','subject_id' , 'author_id' , 'name' , 'details', 'published', 'status'

    ];
}
