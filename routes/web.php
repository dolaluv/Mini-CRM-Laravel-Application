<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
    

 
    
 
Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/kkk', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/', 'AdminPostsController@mypost');

 
 

Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', function(){

        return view('admin.index');




    });


 

    Route::resource('admin/companies', 'CompanyController',['names'=>[

        'index'=>'admin.companies.index',
        'create'=>'admin.companies.create',
        'store'=>'admin.companies.store',
        'edit'=>'admin.companies.edit'
 

    ]]);

      Route::resource('admin/employee', 'EmployeesController',['names'=>[

        'index'=>'admin.employee.index',
        'create'=>'admin.employee.create',
        'store'=>'admin.employee.store',
        'edit'=>'admin.employee.edit'





    ]]);

  


});