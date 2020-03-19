<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoresController extends Controller
{
	public function add(){
    	return view('scores.add');
    }
    public function addstudents(){
        return view('scores.addstudents');
    }
    public function addcri(){
        return view('scores.addcri');
    }
	public function index(){
    	return view('scores.index');
    }

    public function list(){
    	return view('scores.list');
    }

    public function generate(){
    	return view('scores.generate');
    }
}
