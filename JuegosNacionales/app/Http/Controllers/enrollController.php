<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class enrollController extends Controller
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
    public function index()
    {
        return view('/Enroll/show');
    }
    
     public function add(){
        return view('/Enroll/specification');
    }

         public function insert(){
        return view('/Enroll/insertNew');
    }

     public function doc(){
        return view('/Enroll/documents');
    }

    
}
