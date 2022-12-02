<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{



    protected $fillable = [
         'name', 'age','address' , 'phone' , 'photo' ,'email', 'password', 'status'

    ];
}
