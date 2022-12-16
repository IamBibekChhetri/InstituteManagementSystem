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
        return $this->belongsTo(Branch::class);
    }

    protected $fillable = [
        'branch_id', 'faculty_id', 'batch_id', 'name', 'gender', 'qualification', 'status', 'photo', 'email', 'password', 'DOB', 'phone',
        'fatherName', 'fatherEmail', 'fatherPhone', 'fatherOccupation', 'fatherOffice', 'fatherDesignation',
        'motherName', 'motherEmail', 'motherPhone', 'motherOccupation', 'motherOffice', 'motherDesignation',
        't-country', 't-state', 't-city', 't-zipcode', 't-nationality',
        'p-country', 'p-state', 'p-city', 'p-zipcode', 'p-nationality',

    ];
}
