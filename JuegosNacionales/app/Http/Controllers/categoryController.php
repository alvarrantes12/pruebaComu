<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
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
        return view('/Category/show')
         ->with ('category', Category::all());
    }
    
     public function insertCategory(){
        return view('/Category/new');
    }
    
     public function insertNewCategory(Request $request)
  {
      $category = new category;
       $category->nameCategory = $request-> category;
        $category->active = 1;
         $category->startDate = $request-> startDate;
          $category->endDate = $request-> endDate;
          
        $category->save();
        return view('/Category/new');
  }
  
  public function deleteCategory($IDCategory){
        Category::where('IDCategory', $IDCategory)
          ->update(['active' => 0]);
    }
}
