<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistanceController extends Controller
{
	public function excel(){
    	return view('assistance.excel');
    }

	 public function grades(){
    	return view('assistance.grades');
    }

    public function index(){
    	return view('assistance.index');
    }
}
