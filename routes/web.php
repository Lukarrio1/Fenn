<?php

// This controller returns view that aren't admin editable .
Route::get('/', "PagesController@index");
// These are the admin routes
Auth::routes();
// This returns a view for the dashboard view
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// This returns a view for the the admin edit view
Route::get('/admin/edit','DashboardController@edit')->name('Admin.edit');
// This returns data for the view above
Route::get('/admin/data','DashboardController@AdminData')->name('Admin.data');
