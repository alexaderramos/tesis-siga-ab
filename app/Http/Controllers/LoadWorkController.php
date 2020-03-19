<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadWorkController extends Controller
{
    function index(){
    	return view('loadwork.index');
    }
}
