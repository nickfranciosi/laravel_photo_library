<?php

Route::get('/', ['as' => 'home', 'uses' => 'PhotoController@index']);
Route::get('photo/new', ['as' => 'createForm' ,'uses' => 'PhotoController@create']);
Route::resource('photo', 'PhotoController');


