<?php


Route::get('photo/new', ['as' => 'createForm' ,'uses' => 'PhotoController@create']);
Route::resource('photo', 'PhotoController');


