<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
 	   public function add(){
    	return view('students.add');
    }

    public function show(){
    	return view('students.index');
    }

       public function list(){
    	return view('students.list');

    }

    public function presences(){

    	return view('students.presences');
    }
}
