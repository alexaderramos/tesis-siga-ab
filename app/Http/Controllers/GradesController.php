<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Grade;	

class GradesController extends Controller
{
       
     function add(){
    	return view('grades.add');
    }
     function index(){

		$grades= DB::table('Grades')->get();

		return view('grades.index', compact('grades'));
  
    }


public function addGra(){
	
       	$data2 = request()->all();
		Grade::create([
			'CodGrade' => 'GR0'.$data2['Grade'],
	      	'Grade' => $data2['Grade'], 
	      	'Level' => $data2['Level'], 
	      	'Places' => $data2['Places'], 
	 
		]);

			$grades= DB::table('Grades')->get();

		return view('grades.index', compact('grades'));
    
		
	}
}
