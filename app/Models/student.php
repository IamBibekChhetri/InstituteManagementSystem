<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function payment()
    {
        return $this->belongsTo(payment::class);
    }


    protected $fillable = [
        'name', 'batch_id', 'gender','DOB' , 'father' , 'mother' ,'address', 'state','city','zipcode','nationality','phone','qualification','photo','email','password', 'status'

    ];
}
