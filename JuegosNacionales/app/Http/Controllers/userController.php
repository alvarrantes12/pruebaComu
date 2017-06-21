<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class userController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function add(){
        return view('/User/userType');
    }
    
    
    public function showUser()
    {
        return view('/User/show')
         ->with ('user', Users::all());
    }
}
