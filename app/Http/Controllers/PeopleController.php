<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\People;


class PeopleController extends Controller
{
	public function add(){
	
		return view('people.add');

	}

		public function index(){


		$peoples= DB::table('people')->get();

		return view('people.index', compact('peoples'));
	}

	public function addPeo(){
	
       	$data2 = request()->all();
		People::create([
			'DNI' => $data2['DNI'],
	      	'Name' => $data2['Name'], 
	      	'LastName' => $data2['LastName'], 
	      	'MiddleName' => $data2['MiddleName'], 
	      	'Gender' => $data2['Gender'],
	      	'Phone' => $data2['Phone'], 
	      	'Birthdate' => $data2['Birthdate'],
	      	'Address' => $data2['Address'],
	      	'Profession' => $data2['Profession']
		]);

		$peoples= DB::table('people')->get();

		return view('people.index', compact('peoples'));
    
		
	}



}
