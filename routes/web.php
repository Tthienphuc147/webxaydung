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
Route::get('/admin/introductionView','AdminIntroduction@show');
Route::post('/admin/introduction','AdminIntroduction@update');
/*admin-contact*/
Route::get('/admin/contactList','AdminController@showContactList');
Route::get('/admin/contactDetail/{unsigned_name}','AdminController@showContactDetail');
Route::get('/admin/contactDetail/change/{unsigned_name}','AdminController@changeContactDetailStatus');
//admin-serviceCategory
Route::get('/admin/servicecategory','AdminServiceCategory@showList');
Route::get('/admin/servicecategory/show/add','AdminServiceCategory@showAdd');
Route::get('/admin/servicecategory/{id}','AdminServiceCategory@showServiceCategory');

Route::post('/admin/servicecategory/update','AdminServiceCategory@update');
Route::post('/admin/servicecategory/add','AdminServiceCategory@add');

//admin-service
Route::get('/admin/service','AdminService@showList');
Route::get('/admin/service/{id}','AdminService@showService');

Route::post('/admin/service/update','AdminService@update');


//admin-postCategory
Route::get('/admin/postcategory','AdminPostCategory@showList');
Route::get('/admin/postcategory/show/add','AdminPostCategory@showAdd');
Route::get('/admin/postcategory/{id}','AdminPostCategory@showPostCategory');

Route::post('/admin/postcategory/update','AdminPostCategory@update');
Route::post('/admin/postcategory/add','AdminPostCategory@add');

//admin-post
Route::get('/admin/post','AdminPost@showList');
Route::get('/admin/post/{id}','AdminPost@showPost');
Route::get('/admin/post/show/add','AdminPost@showAdd');
Route::get('/admin/post/changestatus/{id}','AdminPost@changeStatus');
Route::post('/admin/post/update','AdminPost@update');
Route::post('/admin/post/add','AdminPost@add');


//admin-comment
Route::get('/admin/comment/{id}','AdminComment@showList');
Route::get('/admin/comment/accept/{idpost}/{id}','AdminComment@accept');
Route::get('/admin/comment/denife/{idpost}/{id}','AdminComment@denife');
Route::post('/admin/comment/add','AdminComment@add');

// phong thuy
Route::get('/phongthuy/thuocloban','PhongthuyController@showthuocloban');
Route::get('/phongthuy/huongnha','PhongthuyController@showhuongnha');

//login

Route::get('/showlogin','UserController@CheckLogin');
Route::post('/showlogin/login','UserController@LoginAuth');
route::get('/logout','UserController@Logout');
route::get('/forgot_password','SecurityController@forgot');
route::post('/forgot','SecurityController@resetPassword');

//project category
Route::get('/admin/projectcategory','AdminProjectCategory@showList');
Route::get('/admin/projectcategory/show/add','AdminProjectCategory@showAdd');
Route::get('/admin/projectcategory/{id}','AdminProjectCategory@showProjectCategory');

Route::post('/admin/projectcategory/update','AdminProjectCategory@update');
Route::post('/admin/projectcategory/add','AdminProjectCategory@add');



//project
Route::get('/admin/project','AdminProject@showList');
Route::get('/admin/project/{id}','AdminProject@showProject');
Route::get('/admin/project/show/add','AdminProject@showAdd');
Route::get('/admin/project/changestatus/{id}','AdminProject@changeStatus');
Route::post('/admin/project/update','AdminProject@update');
Route::post('/admin/project/add','AdminProject@add');







//pricing-category

Route::get('/admin/pricingcategory','AdminPricingCategory@showList');
Route::get('/admin/pricingcategory/show/add','AdminPricingCategory@showAdd');
Route::get('/admin/pricingcategory/{id}','AdminPricingCategory@showPricingCategory');

Route::post('/admin/pricingcategory/update','AdminPricingCategory@update');
Route::post('/admin/pricingcategory/add','AdminPricingCategory@add');


//pricing
Route::get('/admin/pricing','AdminPricing@showList');
Route::get('/admin/pricing/{id}','AdminPricing@showPricing');
Route::get('/admin/pricing/show/add','AdminPricing@showAdd');
Route::post('/admin/pricing/update','AdminPricing@update');
Route::post('/admin/pricing/add','AdminPricing@add');



//slide
Route::get('/admin/slide','AdminSlide@showList');
Route::get('/admin/slide/{id}','AdminSlide@showSlide');
Route::get('/admin/slide/show/add','AdminSlide@showAdd');
Route::post('/admin/slide/update','AdminSlide@update');
Route::post('/admin/slide/add/slide','AdminSlide@add');


// admin user 
Route::get('/admin/user/list','AdminUser@showListUser');
Route::get('/admin/user/delete/{id}','AdminUser@deleteUser');
Route::get('/admin/user/create/show','AdminUser@createUser');
Route::get('/admin/user/change', 'AdminUser@showChange');


Route::post('/admin/user/create/add','AdminUser@addUser');
Route::post('/admin/user/changed','AdminUser@changeSaveUser');