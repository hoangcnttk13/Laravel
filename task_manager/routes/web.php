<?php
 Route::get('/',[
 	'uses' => 'CustomerController@getIndex',
 	'as' => 'customer.index'
]);

Route::get('/add',[
	'uses' => 'CustomerController@getaddCustomer',
	'as' => 'customer.add'
]);

Route::post('/add',[
	'uses' => 'CustomerController@clickAdd',
	'as' => 'customer.addCustomer'
]);

Route::get('/xem/{id}',[
	'uses' => 'CustomerController@getXem',
	'as'=> 'customer.xem'
]);

Route::get('/sua/{id}',[
	'uses' => 'CustomerController@showSua',
	'as'=> 'customer.sua'
]);

Route::post('/sua/{id}',[
	'uses' => 'CustomerController@addSua',
	'as'=> 'customer.addSua'
]);

Route::get('/xoa/{id}',[
	'uses' => 'CustomerController@delete',
	'as'=> 'customer.delete'
]);