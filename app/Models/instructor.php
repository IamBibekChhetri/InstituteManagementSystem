<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public function branch()
    {
        return $this->hasMany(Branch::class);
    }


    protected $fillable = [
         'name', 'age','address' , 'phone' , 'photo' ,'email', 'password', 'status'

    ];
}
