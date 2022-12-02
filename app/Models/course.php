<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function fee()
    {
        return $this->hasMany(fee::class);
    }



    protected $fillable = [
        'code', 'name','details' , 'duration' , 'status'

    ];
}
