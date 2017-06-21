<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\sportCategory;

class sportCategoryController extends Controller
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

  public function query()
  {
      $person = person::all();
      
      dd($person);
  }
  
   public function insertSportCategory(Request $request)
  {
      $sportCategory = new sportCategory;
      $sportCategory->IDCategory = 1;
      $sportCategory->IDSport = 1;
      $sportCategory->save();
  }
}