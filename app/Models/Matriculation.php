<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matriculation extends Model
{
    
    protected $fillable = ['CodMatriculation', 'CodStudent', 'DNIParents', 'Period', 'CodGrade', 'CodSection','MatriculationDate','ExSchool', 'AditionalInfo'];
}
