<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\canton;
use App\cantonProvince;
use App\province;
use Illuminate\Support\Facades\DB;

class cantonController extends Controller
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
        return view('/Canton/show')
        ->with('canton', Canton::all());
    }
    public function add(){
        return view('/Canton/new')
        ->with('province', Province::all());
    }
    
    public function newCanton(Request $request)
  {
      if($this->cantonExist($request-> canton) == null){
        $canton = new canton;
        $canton->nameCanton = $request->canton;
        $canton->save();
        $this-> relateProvice($request->canton, $request->province);
        return $this->index();
      }else{
         return $this-> add();
          
      }
  }
  
  public function relateProvice($canton , $province ){
      $idCanton = canton::select('IDCanton') -> where ('nameCanton', $canton)->first();
      $cantonProvince = new cantonProvince;
      $cantonProvince->IDCanton = $idCanton -> IDCanton;
      $cantonProvince->IDProvince = $province;
      $cantonProvince->save();
      
      
  }
  
  private function cantonExist($canton){
      $exist = canton:: select('IDCanton') -> where ('nameCanton', $canton )->first();
      return $exist;
  }
  
  private function getAll(){
      $all = canton::join('cantonProvince', 'canton.IDCanton', '=' , 'cantonProvince.IDCanton')
                    -> join('province', 'cantonProvince.IDProvince', '=', 'province.IDProvince')
                     ->select('nameCanton', 'nameProvince')
                      ->get();
        
      
  }
  
  public function delete(Request $request, $IDCanton){
     
      cantonProvince::where('IDCanton' , $IDCanton)->delete();
      canton::where('IDCanton', $IDCanton)->delete();
      
      return view('/Canton/show')
        ->with('canton', Canton::all());
      
}
}