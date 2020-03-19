<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{

	public function add(){
		return view('teachers.add');
	}
	public function index(){
		return view('teachers.index');
	}

    public function list(){
    	return view('teachers.list');
    }
}
