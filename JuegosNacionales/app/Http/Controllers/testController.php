<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\test;

class testController extends Controller
{
 /*
    |--------------------------------------------------------------------------
    | test Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


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
        return view('/Test/show')
            ->with ('test', Test::all());
    }
    
     public function insertTest(){
        return view('/Test/new');
    }

  
  public function insertNewTest(Request $request)
  {
      $test = new test;
      $test->nameTest = $request-> test;
      $test->save();
      return view('/Test/new');
  }   
  
  public function deleteTest($IDTest){
       $test = Test::where('IDTest', $IDTest)->delete();
        return view('/Test/new');
    }
}
