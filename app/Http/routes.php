<?php
Route::get('/', 'CustomerController@index');
Route::get('contacts/add/{id}', 'ContactController@index');
Route::get('activity/add/{id}', 'ActivityController@index');
Route::get('customers/edit/{id}', 'CustomerController@edit');
Route::get('customers/search', 'CustomerController@search');
Route::get('contacts/edit/{id}', 'ContactController@edit');
Route::get('activities/edit/{id}', 'ActivityController@edit');
Route::resource('customers', 'CustomerController');
Route::resource('activities', 'ActivityController');
Route::resource('contacts', 'ContactController');


