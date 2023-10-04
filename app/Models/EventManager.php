<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name' ,
        'last_name' ,
        'birthDay' ,
        'gender' ,
        'email' ,
        'phone' ,
        'password' ,
        'Cpassword'

    ];
}
