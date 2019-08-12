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
Auth::routes();
Route::get('/login', function (){
    echo 'Invalid Login Credentials';
})->name('login');
Route::get('/', function () {return view('welcome.index');});
Route::get('/home', 'HomeController@verify_user_role');
Route::get('/logout', 'HomeController@logout');


//=====================Chef==================//
Route::group(['prefix' => 'chef2'], function () {});
Route::get('/chef', 'ChefController@index')->middleware('Chef_user');
Route::get('/become_chef', 'ChefController@become_chef')->name('become_chef');
Route::get('/profile', 'ChefController@profile')->middleware('Chef_user');
Route::match(['post','get'],'/myrecipe',['uses'=>'ChefController@myrecipe', 'as'=>'myrecipe'])->middleware('Chef_user');
Route::get('/breakfast', 'ChefController@breakfast')->middleware('Chef_user');
Route::get('/lunch', 'ChefController@lunch')->middleware('Chef_user');
Route::get('/dinner', 'ChefController@dinner')->middleware('Chef_user');
Route::get('/add_recipe_break_fast', 'ChefController@add_recipe_break_fast')->middleware('Chef_user');
Route::get('/add_recipe_lunch', 'ChefController@add_recipe_lunch')->middleware('Chef_user');
Route::get('/add_recipe_dinner', 'ChefController@add_recipe_dinner')->middleware('Chef_user');



//=====================Admin==================//
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('Admin_user');
Route::get('/admin2', 'AdminController@index')->name('admin')->middleware('Admin_user');
Route::get('/recipe_details', 'AdminController@recipe_details')->name('recipe_details')->middleware('Admin_user');
Route::get('/approve_recipe/{id}', 'AdminController@approve_recipe')->name('approve_recipe')->middleware('Admin_user');
Route::post('/decline_recipe', 'AdminController@decline_recipe')->name('decline_recipe');
Route::get('/chef_application', function ()   {return view('admin.chef_applications');})->name('chef_application')->middleware('Admin_user');
Route::get('/recipe_approvals','AdminController@index')->name('recipe_approvals')->middleware('Admin_user');
Route::get('/schedule', function ()   {return view('admin.schedule');})->name('schedule')->middleware('Admin_user');



//=====================User==================//
Route::get('/user', 'UserController@index');
Route::get('/User_profile', 'UserController@profile');


//=====================Ajax API==================//
Route::post("/update_personal_info","ChefController@update_personal_info");
Route::match(['get', 'post'], 'upload_profile_image', 'ChefController@upload_profile_image');
Route::match(['get', 'post'], 'upload_recipe_image', 'ChefController@upload_recipe_image');
Route::match(['get', 'post'], 'save_new_recipe_data', 'ChefController@save_new_recipe_data');
Route::match(['get', 'post'], 'update_recipe_data', 'ChefController@update_recipe_data');
Route::match(['get', 'post'], 'save_new_ingredient_data', 'ChefController@save_new_ingredient_data');
Route::match(['get', 'post'], 'change_recipe_status', 'ChefController@change_recipe_status');
Route::match(['get', 'post'], 'check_user_email', 'ChefController@check_user_email');
Route::match(['get', 'post'], 'become_chef_ajax_1', 'ChefController@become_chef_ajax_1');
Route::post("/check_user","LoginController@check_user");

//=====================Clear Cache==================//
Route::get('/clear', function() {
    $exitCode = Artisan::call('key:generate');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});




//test routes
//Route::get('/test','ChefController@test')->name('my');


