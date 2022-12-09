<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function batch()
    {
        return $this->hasMany(Batch::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function instructor()
    {
        return $this->hasMany(Instructor::class);
    }


    protected $fillable = [
         'name' , 'address', 'panVat', 'phone', 'email', 'status'

    ];
}
