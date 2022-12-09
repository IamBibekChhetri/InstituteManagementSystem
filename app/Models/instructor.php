<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    protected $fillable = [
        'branch_id', 'name', 'age','address' , 'phone' , 'photo' ,'email', 'password', 'status'

    ];
}
