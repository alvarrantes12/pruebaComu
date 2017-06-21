<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\sport;
use App\sportType;

class sportController extends Controller
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
    
     public function index()
    {
        return view('/Sport/show')
         ->with ('sport', Sport::all());
    }
    
     public function insertSport(){
        return view('/Sport/new')
            ->with ('sportType', SportType::all());
    }
     public function insertNewSport(Request $request)
  {
      $sport = new sport;
      $sport->nameSport = $request-> sportName;
      $sport->active = 1;
      $sport->startDate = $request-> startDate;
      $sport->endDate = $request-> endDate;
      $sport->IDSportType = $request-> sportT;
      $sport->athletesAmount = $request-> athleteAmount;
      $sport->save();
      return view('/Sport/show');
  }
 
    
    public function editSport($IDSport){
        Sport::where('IDSport', $IDSport)
          ->update(['nameSport' => 'Bolos']);
    }
    
    public function deleteSport($IDSport){
        Sport::where('IDSport', $IDSport)
          ->update(['active' => 0]);
    }
 
}
