<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Matriculation;

class MatriculationsController extends Controller
{
	 function add(){
		return view('matriculation.add');
    }

     function addMat(){
    	
    	$data = request()->all();
		Matriculation::create([
			'CodMatriculation' => $data['CodMatriculation'],
	      	'CodStudent' => $data['CodStudent'], 
	      	'DNIParents' => $data['DNIParents'], 
	      	'Period' => $data['Period'], 
	      	'CodGrade' =>$data['CodGrade'] ,
	      	'CodSection' => $data['CodSection'], 
	      	'MatriculationDate' => $data['MatriculationDate'],
	      	'ExSchool' => $data['ExSchool'],
	      	'AditionalInfo' => $data['AditionalInfo'] ,
		]);

   		 return view('matriculation.index');
    }
    function index(){
    	
    	  		 return view('matriculation.index');
    }
}
