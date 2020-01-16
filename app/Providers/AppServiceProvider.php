<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
  
    public function boot()
    {
        $projectCategoryMenu = DB::table('project_category')->get();
        $serviceCategoryMenu = DB::table('service_category')->get();
        $advisoryCategoryMenu = DB::table('post_category')->get();
          $pricingCategoryMenu = DB::table('pricing_category')->get();
   

        view()->share(['projectCategoryMenu'=> $projectCategoryMenu,'serviceCategoryMenu'=> $serviceCategoryMenu,
        'advisoryCategoryMenu'=> $advisoryCategoryMenu,'pricingCategoryMenu'=> $pricingCategoryMenu]);
    }
  

   
}
