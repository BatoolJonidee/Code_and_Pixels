<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $guarded;

    public function employee(){
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function user(){
        return $this->belongsTo(Users::class, 'user_id');
    }
}
