<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodController extends Controller
{
    function index(){
    	return view('period.index');
    }
        function add(){
    	return view('period.add');
    }
     function type(){
    	return view('period.type');
    }


}
