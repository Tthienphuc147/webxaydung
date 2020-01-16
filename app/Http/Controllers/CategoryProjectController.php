<?php

namespace App\Http\Controllers;



class CategoryProjectController extends Controller
{
   public function showCategoryProject($unsigned_name){
        $projectCategoryName='App\ProjectCategory'::where('id',$unsigned_name)->pluck('name');
        $project='App\Project'::where('project_category_id',$unsigned_name)->get();
        return view('mainPage.projectCategory')->with('project',$project)->with('projectCategoryName',$projectCategoryName[0]);
       
    }
        
}
