<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\person;

class personController extends Controller
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
  
   public function insertPerson(Request $request)
  {
      $person = new person;
       $person->IDPerson = '207510664';
        $person->name = 'Jeanca';
         $person->lastName1 = 'Hidalgo';
          $person->lastName2 = 'Quesada';
           $person->telephone = '83629280';
            $person->email = 'kz@jssl.com';
             $person->birthDate = '2017-05-17';
             $person->IDRol = 1;
             $person->IDCanton = 1;
             $person->active = 1;
        $person->save();
  }
  
   public function insertNew()
    {
        return view('/Inscription/insertNew');
    }
    
   public function insertNewA()
    {
        return view('/Admin/insertNew');
    }
    
    public function insertF()
    {
        return view('/Admin/index');
    }
    
    public function index()
    {
        return view('/Athlete/show')
         ->with ('person', Person::all());
    }
    
    
   public function documents()
    {
        return view('/Inscription/documents');
    }
}