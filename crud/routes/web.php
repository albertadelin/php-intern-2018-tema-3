<?php


Route::get('/','PostController@show');

Route::get('/employees/create','EmployeeController@create');

Route::get('/companies/create','CompanyController@create');
Route::post('/store', 'CompanyController@store');