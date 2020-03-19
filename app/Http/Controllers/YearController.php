<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Year;
class YearController extends Controller
{
    function index(){
    	$years= DB::table('years')->get();

		return view('year.index', compact('years'));
    }

    function add(){

    	return view('year.add');
    }


    function addYear(){

    	$data = request()->all();
		Year::create([
			'YearId' => 'AÑ'.$data['Year'],
	      	'Year' => $data['Year'], 
	      	'Weeks' => $data['Weeks'], 
	      	'Description' => $data['Description'], 

		]);
		$years= DB::table('years')->get();

		return view('year.index', compact('years'));

  
    }


}
