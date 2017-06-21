<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\athlete;

class athleteController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | person Controller
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

  
   public function insertAthlete(Request $request)
  {
      $athlete = new athlete;
       $athlete->IDPerson = '207510264';
        $athlete->IDBloodType = 1;
         $athlete->weight = 2.5;
          $athlete->height = 1.9;
           $athlete->IDStatus = 1;
        $athlete->save();
  }
  
  
  
}