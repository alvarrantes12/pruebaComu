<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\role;

class roleController extends Controller
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

   public function insertRole(Request $request)
  {
      $role = new role;
      $role->rol = $request-> role;
      $role->save();
  }
  
  
   public function insertView(){
        return view('/Role/new');
    }
    
    public function showRole()
    {
        return view('/Role/show')
         ->with ('role', Role::all());
    }
    
    
      public function deleteRole($IDRole){
       $role = Role::where('IDRole', $IDRole)->delete();
    }
    
}