<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function branch()
    {
        return $this->hasMany(Branch::class);
    }

    protected $fillable = [
        'name', 'gender','DOB' , 'father' , 'mother' ,'address', 'state','city','zipcode','nationality','phone','qualification','photo','email','password', 'status'

    ];
}
