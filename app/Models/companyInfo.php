<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companyInfo extends Model
{
    protected $fillable = [
        'cname', 'rname','address' , 'phone' , 'photo', 'pan' ,'email'

   ];
}
