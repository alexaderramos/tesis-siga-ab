<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
        function index(){
    	return view('courses.index');
    }
       function add(){
    	return view('courses.add');
    }
}
