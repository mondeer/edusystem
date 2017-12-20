<?php

Route::get('/', function () {
    return view('welcome');
});

// auth routes

Route::post('/login', 'LoginCtrl@login');


Route::post('/logout', 'LoginCtrl@logout');

// System Admin routes
Route::group(['middleware' => 'sysadmin'], function(){
  Route::get('/system/admin', 'System\homeCtrl@index');

  Route::get('/system/register', 'RegisterCtrl@register');

  Route::post('/system/register', 'RegisterCtrl@postRegister');

  Route::get('/system/view/users', 'System\viewusersCtrl@viewUsers');

  Route::get('/send', 'SmsCtrl@sms');

  Route::post('/send', 'SmsCtrl@smsPost');
});


// end system admin routes



// County Admin routes
Route::group(['middleware' => 'countyadmin'], function(){
  Route::get('/county/admin', 'AdminCtrl@index');

  Route::get('/county/schools/create', 'SchoolCtrl@create');

  Route::post('/county/schools/create', 'SchoolCtrl@postCreate');

  Route::get('/county/schools/view', 'SchoolCtrl@view');

  Route::delete('/county/school/{id}', 'SchoolCtrl@destroy');

  Route::get('/county/school/{id}', 'SchoolCtrl@edit');

  Route::put('/county/school/{id}', 'SchoolCtrl@update');

  Route::get('/countyadmin/tutors/view', 'TutorCtrl@viewTutors');

  Route::get('/countyadmin/students/view', 'StudentCtrl@students');

  Route::get('/countyadmin/expenses/viewall', 'ExpenseCtrl@allExpenses');

  Route::delete('/countyadmin/expense/{id}/delete', 'ExpenseCtrl@destroy');
});

// end county admin routes


// School Admin routes
Route::group(['middleware' => 'schooladmin'], function(){
  Route::get('/school/admin', 'SchminCtrl@index');

  Route::get('/schooladmin/teacher/add', 'TutorCtrl@index');

  Route::post('/schooladmin/teacher/add', 'TutorCtrl@addTutor');

  Route::get('/schooladmin/teacher/view', 'TutorCtrl@viewTutor');

  Route::delete('/schooladmin/teacher/{id}/delete', 'TutorCtrl@destroy');

  Route::get('/schooladmin/expenses/add', 'ExpenseCtrl@index');

  Route::post('/schooladmin/expenses/add', 'ExpenseCtrl@addExpense');

  Route::get('/schooladmin/expenses/view', 'ExpenseCtrl@viewExpense');

  Route::get('/schooladmin/assets/request', 'AssetCtrl@index');

  Route::post('/schooladmin/assets/request', 'AssetCtrl@reqAsset');

  Route::get('/schooladmin/assets/view', 'AssetCtrl@viewAssets');

  Route::get('/schooladmin/students/enroll', 'StudentCtrl@index');

  Route::post('/schooladmin/students/enroll', 'StudentCtrl@enrollStudent');

  Route::get('/schooladmin/students/view', 'StudentCtrl@viewStudent');

  Route::delete('/schooladmin/students/{id}/delete', 'StudentCtrl@destroy');

  Route::get('schooladmin/students/report', 'StudentCtrl@downloadStudents');

  Route::get('/invoice/{id}', 'ExpenseCtrl@downloadExpense');
// end school admin routes

// sms api
});
