<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class admin extends Model
{
    use HasFactory,HasApiTokens;

    public function EventManager(): HasMany
    {
        return $this->hasMany(EventManager::class);
    }
    
    
        protected $fillable = [
            'first_name' ,
            'last_name' ,
            'birthday' ,
            'gender' ,
            'email' ,
            'phone' ,
            'password' ,
            'Cpassword'
    
        ];
}
