<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('types_users')->insert([
        	'CodUserType' => 'TU01',
			'TypeUser' => 'Director',
			'description' => 'Tiene acceso total al sistema',
        ]);
         DB::table('types_users')->insert([
        	'CodUserType' => 'TU02',
			'TypeUser' => 'Secretaria',
			'description' => 'Tiene acceso parcial al sistema',
        ]);

  		DB::table('types_users')->insert([
        	'CodUserType' => 'TU03',
			'TypeUser' => 'Alumno',
			'description' => 'Puede hacer consultas academicas',
        ]);

    }
}
