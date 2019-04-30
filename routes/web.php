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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('admin/post', ['uses'=> 'Admin\PostController@index']);
Route::get('admin/post/create', ['uses'=> 'Admin\PostController@create']);
Route::post('admin/post/store', ['uses'=> 'Admin\PostController@store']);
Route::get('admin/post/edit/{id}', ['uses'=> 'Admin\PostController@edit']);
Route::post('admin/post/update/{id}', ['uses'=> 'Admin\PostController@update']);
Route::get('admin/post/delete/{id}', ['uses'=> 'Admin\PostController@destroy']);




Route::get('admin/dashboard', 					['uses' => 'Admin\DashboardController@index']);

Route::get('admin/product', 		['uses' => 'Admin\ProductController@index']);

Route::get('admin/product/create', 					['uses' => 'Admin\ProductController@create']);

Route::post('admin/product/store', 					['uses' => 'Admin\ProductController@store']);




Route::get('admin/employee', 					['as' => 'admin.employee', 'uses' => 'Admin\EmployeeController@index']);

Route::get('admin/employee/create', 					['as' => 'admin.employee.create', 'uses' => 'Admin\EmployeeController@create']);
Route::post('admin/employee/store', 					['as' => 'admin.employee.store', 'uses' => 'Admin\EmployeeController@store']);
Route::get('admin/employee/edit/{id}', ['as' => 'admin.employee.edit', 'uses' => 'Admin\EmployeeController@edit']);
Route::post('admin/employee/update/{id}', ['as' => 'admin.employee.update', 'uses' => 'Admin\EmployeeController@update']);
Route::get('admin/employee/delete/{id}', ['as' => 'admin.employee.delete', 'uses' => 'Admin\EmployeeController@destroy']);


