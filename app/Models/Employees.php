<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $guarded;

    public function category(){
        return $this->belongsTo(Categories::class);
    }

    public function schedule(){
        return $this->hasMany(Schedules::class, 'emplyee_id');
    }

    public function reservation(){
        return $this->hasMany(Reservation::class, 'employee_id');
    }
}
