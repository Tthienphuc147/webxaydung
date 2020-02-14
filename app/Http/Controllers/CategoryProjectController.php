<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class CategoryProjectController extends Controller
{
   public function showCategoryProject($unsigned_name,Request $request){
        $projectCategoryName='App\ProjectCategory'::where('id',$unsigned_name)->pluck('name')->first();
        $project='App\Project'::where('project_category_id',$unsigned_name)->paginate(2);
        if ($request->ajax()) {
        return view('mainPage.projectCategoryData', compact('projectCategoryName','project'));
    
        }
        return view('mainPage.projectCategory', compact('projectCategoryName','project'));
    
     
       
    }

}
