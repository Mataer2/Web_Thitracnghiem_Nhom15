<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavsoftUser extends Model
{
    
    protected $table = 'savsoft_users';

   
    protected $primaryKey = 'uid'; 

    
    public $timestamps = false; 

    
    protected $fillable = [
        'studentid', 'first_name', 'last_name', 'password', 'email', 
    ];
}