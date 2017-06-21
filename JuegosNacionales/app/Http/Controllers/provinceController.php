<?php

namespace App\Http\Controllers;
use App\province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class provinceController extends Controller
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
        return view('/Province/show')
        ->with('province', Province::all());
    }
     public function add(){
        return view('/Province/new');
    }
    
    public function newProvince(Request $request){
         
    if($this->provinceExist($request-> province) == null){
     $province = new province;
     $province->nameProvince = $request->province;
     $province->save();
     return view('/Province/new');
    }else{}
    }
    
     private function provinceExist($province){
      $exist = DB::table('province') ->select('IDProvince') -> where ('nameProvince', $province )->first();
      return $exist;
  }
}

