<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MatriculationModuleTest extends TestCase
{
   
        /** 
     *@test*/
  function it_creates_a_new_matriculation()
     {
     	$this->withoutExceptionHandling();
      $this->post('/matriculas/alumno/', [
      	'CodMatriculation' => 'MAT006' ,
      	 'CodStudent' => 'AL71465912', 
      	 'DNIParents' => '71465914', 
      	'Period' => '2020', 
      	 'CodGrade' =>'GR01' ,
      	  'CodSection' => 'SE1', 
      	  'MatriculationDate' => '2019-12-18',
      	   'AditionalInfo' => 'Alergico a la penicilina',
      
      ])->assertRedirect(route('matriculation.add'));


      $this->assertDatabaseHas('matriculations', [
        	'CodMatriculation' => 'MAT002' ,
      	 'CodStudent' => 'AL71465912', 
      	 'DNIParents' => '71465914', 
      	'Period' => '2020', 
      	 'CodGrade' =>'GR01' ,
      	  'CodSection' => 'SE1', 
      	  'MatriculationDate' => '2019-12-18',
      	   'AditionalInfo' => 'Alergico a la penicilina',
      ]);
     }


}
