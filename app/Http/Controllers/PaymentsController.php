<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
	public function payments(){
    	return view('payments.payments');
    }
	  public function index(){
    	return view('payments.index');
    }
    public function list(){
    	return view('payments.list');
    }
}
