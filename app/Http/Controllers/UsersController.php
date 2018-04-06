<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create(){
     //return view('users.create');
    	return view('static_pages/create');
    }
}
