<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public function student()
    {
        return $this->belongsTo(student::class);
    }
    protected $fillable = [
        'student_id', 'payed', 'payment', 'transaction', 'status'

    ];
}
