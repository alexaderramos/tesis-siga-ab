<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
        	'DNI' => '71465912',
			'LastName' => 'Benito',
			'MiddleName' => 'Orihuela',
			'Name' => 'Alejandro Mauro',
			'Birthdate' => '1998-08-11',
			'Address' => 'AA.HH 18 de mayo B-06',
			'Phone' => '936925981',
			'Gender' => 'Masculino'
        ]);

         DB::table('people')->insert([
            'DNI' => '71465913',
            'LastName' => 'Benites',
            'MiddleName' => 'Orihuela',
            'Name' => 'Alejandro',
            'Birthdate' => '1998-08-12',
            'Address' => 'AA.HH 18 de mayo B-07',
            'Phone' => '936925981',
            'Gender' => 'Masculino'
        ]);
       

    }
}
