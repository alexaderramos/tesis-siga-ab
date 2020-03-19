<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PeopleModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

        /** 
     *@test*/
     function it_creates_a_new_people()
     {
      $this->post('/personas/agregar/', [
          'DNI' => '71465912',
          'LastName' => 'Benito',
    			'MiddleName' => 'Orihuela',
    			'Name' => 'Alejandro Mauro',
    			'Birthdate' => '1998-08-11',
    			'Address' => 'AA.HH 18 de mayo B-06',
    			'Phone' => '936925981',
    			'Gender' => 'Masculino',
    			'Profession' => 'Ingeniero',
      ]);



      $this->assertDatabaseHas('people', [
        	'DNI' => '71465912',
        	'LastName' => 'Benito',
  		  	'MiddleName' => 'Orihuela',
  			  'Name' => 'Alejandro Mauro',
  			  'Birthdate' => '1998-08-11',
  			  'Address' => 'AA.HH 18 de mayo B-06',
  			  'Phone' => '936925981',
    		  'Gender' => 'Masculino',
    			'Profession' => 'Ingeniero',
		
      ]);
     }
     
}
