<?php

namespace App\Http\Controllers;



class ProjectController extends Controller
{
   public function showDetail($unsigned_name){
        $project='App\Project'::where('project.id',$unsigned_name)->join('project_category', 'project_category.id', '=', 'project.project_category_id')->first();
        $slideImage='App\SlideImage'::where('slide_id',$project->slide_id)->get();
         $slideCount='App\SlideImage'::where('slide_id',$project->slide_id)->get()->count();
        $projectCategory='App\Project'::where('project_category_id',$project->project_category_id)->get();
          return view('mainPage.project')->with('project',$project)->with('projectCategory',$projectCategory)->with('slideImage',$slideImage)->with('slideCount',$slideCount);
    }   
        
}
