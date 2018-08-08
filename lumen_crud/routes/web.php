<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'PostController@show');


$router->get('/employees/create','EmployeeController@create');
$router->post('/employee', 'EmployeeController@store');

$router->get('/employee/update/{id}', ['as' => 'employee.edit', 'uses' => 'App\Http\Controllers\EmployeeController@edit']);
$router->post('/employee/{id}',  ['as' => 'employee.update', 'uses' => 'App\Http\Controllers\EmployeeController@update']);

$router->delete('/employee/{id}',  ['as' => 'employee.destroy', 'uses' => 'App\Http\Controllers\EmployeeController@destroy']);


$router->get('/companies/create','CompanyController@create');
$router->post('/company', 'CompanyController@store');

$router->get('/company/update/{id}',  ['as' => 'company.edit', 'uses' => 'App\Http\Controllers\CompanyController@edit']);
$router->post('/company/{id}', ['as' => 'company.update', 'uses' => 'App\Http\Controllers\CompanyController@updates']);

$router->delete('/company/{id}', ['as' => 'company.destroy', 'uses' => 'App\Http\Controllers\CompanyController@destroy']);