<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@showHome');
Route::get('/introduction', 'IntroductionController@showIntroduction');
Route::get('/contactView', 'ContactController@showContact');
Route::post('/contact/send','ContactController@sendContact');
Route::get('/categoryProject/{unsigned_name}','CategoryProjectController@showCategoryProject');
Route::get('/serviceCategory/{unsigned_name}','ServiceController@showDetail');
Route::get('/advisoryCategory/{unsigned_name}','AdvisoryCategoryController@showCategoryAdvisory');
Route::get('/advisory/{unsigned_name}','AdvisoryController@showDetail');
Route::get('/project/{unsigned_name}','ProjectController@showDetail');
Route::get('/pricing/{unsigned_name}','PricingController@showDetail');

/*admin*/
Route::get('/admin','AdminController@showDashboard');
/*admin-contact*/
Route::get('/admin/contactList','AdminController@showContactList');
Route::get('/admin/contactDetail/{unsigned_name}','AdminController@showContactDetail');
Route::get('/admin/contactDetail/change/{unsigned_name}','AdminController@changeContactDetailStatus');

// phong thuy
Route::get('/phongthuy/thuocloban','PhongthuyController@showthuocloban');
