<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable= [
    	'DNI','Name','LastName','MiddleName','Gender','Phone','Birthdate', 'Address', 'Profession'
    ];

  

}
