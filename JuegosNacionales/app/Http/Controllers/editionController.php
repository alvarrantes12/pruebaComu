<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\edition;

class editionController extends Controller
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
        return view('/Edition/show')
            ->with ('edition', Edition::all());
    }
    
     public function insertEdition(){
        return view('/Edition/new');
    }
    
    
     public function insertNewEdition(Request $request)
  {
      $edition = new edition;
      $edition->nameEdition = $request-> nameEdition;
      $edition->year = $request-> year;
      $edition->place = $request-> place;
      $edition->save();
      return view('/Edition/new');
  }
  
   public function deleteEdition($IDEdition){
       $edition = Edition::where('IDEdition', $IDEdition)->delete();
       return view('/Edition/show');
    }
}
