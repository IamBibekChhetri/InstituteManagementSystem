<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassName extends Model
{
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    
    public function classname()
    {
        return $this->hasMany(ClassName::class);
    }
    
    protected $fillable = [
        'branch_id' , 'name', 'status'

   ];
}
