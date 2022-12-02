<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'student_id', 'payed', 'payment', 'status'

    ];
}
