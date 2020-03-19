<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentsController extends Controller
{

	public function add(){
		return view('parents.add ');
	}
	public function index(){
		return view('parents.index');
	}


	public function list(){
		return view('parents.list');
	}
}
