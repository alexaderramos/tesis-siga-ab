<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

	function add(){
    	return view('notification.add');
    }
     function index(){
    	return view('notification.index');
    }
}
