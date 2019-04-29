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

Route::get('admin/dashboard', 					['uses' => 'Admin\DashboardController@index']);

Route::get('admin/product', 		['uses' => 'Admin\ProductController@index']);

Route::get('admin/product/create', 					['uses' => 'Admin\ProductController@create']);




Route::get('admin/employee', 					['as' => 'admin.employee', 'uses' => 'Admin\EmployeeController@index']);

Route::get('admin/employee/create', 					['as' => 'admin.employee.create', 'uses' => 'Admin\EmployeeController@create']);


