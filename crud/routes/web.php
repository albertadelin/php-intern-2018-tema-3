<?php


Route::get('/','PostController@show');

Route::get('/employees/create','EmployeeController@create');
Route::post('/employee', 'EmployeeController@store');

Route::get('/employee/update/{id}', 'EmployeeController@edit')->name('employee.edit');
Route::post('/employee/{id}', 'EmployeeController@update')->name('employee.update');

Route::delete('/employee/{id}', 'EmployeeController@destroy')->name('employee.destroy');




Route::get('/companies/create','CompanyController@create');
Route::post('/company', 'CompanyController@store');

Route::get('/company/update/{id}', 'CompanyController@edit')->name('company.edit');
Route::post('/company/{id}', 'CompanyController@update')->name('company.update');

Route::delete('/company/{id}', 'CompanyController@destroy')->name('company.destroy');