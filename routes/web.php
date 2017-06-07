<?php

Route::get('/', function () {
    return view('welcome');
});

// auth routes

Route::get('/system/register', 'RegisterCtrl@register');

Route::post('/system/register', 'RegisterCtrl@postRegister');

Route::post('/login', 'LoginCtrl@login');


Route::post('/logout', 'LoginCtrl@logout');

// System Admin routes
Route::get('/system/admin', function(){
  return view('system.dashboard');
});


// end system admin routes



// County Admin routes
Route::get('/county/admin', function(){
  return view('county.dashboard');
});

Route::get('/county/schools/create', 'SchoolCtrl@create');

Route::post('/county/schools/create', 'SchoolCtrl@postCreate');

Route::get('/county/schools/view', 'SchoolCtrl@view');

Route::delete('/county/school/{id}', 'SchoolCtrl@destroy');

Route::get('/county/school/{id}', 'SchoolCtrl@edit');

Route::put('/county/school/{id}', 'SchoolCtrl@update');


// end county admin routes


// School Admin routes
Route::get('/school/admin', function(){
  return view('schools.dashboard');
});

// sms api

Route::get('/send', 'SmsCtrl@sms');

Route::post('/send', 'SmsCtrl@smsPost');
