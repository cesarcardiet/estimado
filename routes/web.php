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
Route::get('/editEmployee/{id}', 'EmployeeController@editEmployee')->name('employees.profile');
Route::put('/editEmployee/employees/{id}', 'EmployeeController@update')->name('employees.editEmployees.udate');
Route::get('/userProfile/{id}', 'UserController@editProfile')->name('users.profile');
Route::resource('/employees', 'EmployeeController');
Route::resource('/users', 'UserController');
