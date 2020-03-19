<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'CodUser' => 'US71465912',   
			'DNI' => '71465912',                            
			'name' => 'Alejandro Mauro Benito Orihuela',
			'email' => 'alejo@gmail.com',
			'password' => bcrypt('123456'),
			'CodUserType' => 'TU01',
        ]);
        DB::table('users')->insert([
            'CodUser' => 'US71465913',   
            'DNI' => '71465913',                            
            'name' => 'Alex Benito ',
            'email' => 'alex@gmail.com',
            'password' => bcrypt('123456'),
            'CodUserType' => 'TU02',
        ]);
        DB::table('users')->insert([
            'CodUser' => 'US71465915',   
            'DNI' => '71465915',                            
            'name' => 'Max Orihuela',
            'email' => 'max@gmail.com',
            'password' => bcrypt('123456'),
            'CodUserType' => 'TU03',
        ]);


    }
}
