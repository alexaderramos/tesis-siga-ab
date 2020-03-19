<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserController extends Controller
{
   
    public function show(){

        $users= DB::table('users')->get();

        return view('users.index', compact('users'));
    

    }

    public function create(){
    	return view('users.create');
    }
    public function types(){
    	return view('users.types');
    }
    public function profile(){
    	return view('users.profile');
    }
}
