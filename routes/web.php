<?php

Route::get('/', function () {
    return view('welcome');
});

// auth routes

Route::get('/system/register', 'RegisterCtrl@register');

Route::post('/system/register', 'RegisterCtrl@postRegister');

Route::post('/login', 'LoginCtrl@login');

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


// end county admin routes

// sms api

Route::get('/send', 'SmsCtrl@sms');

Route::post('/send', 'SmsCtrl@smsPost');
