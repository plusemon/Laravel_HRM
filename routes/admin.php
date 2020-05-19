<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('/','DashboardController@index');
Route::get('profile','AdminProfile@index')->name('admin.profile');


// =---------- AJAX REQUEST HANDLE ROUTES -----------------//
Route::get('get-designation', 'AjaxController@designation');
Route::get('/check-email', 'AjaxController@checkEmail');
Route::get('/check-id', 'AjaxController@checkId');



// ---------------- User CRUD Routes -----------------//
Route::resource('users','UserController');

/*-----Salary Controller Route-----*/
Route::resource('salaries','SalaryController');

Route::resource('pay_salary', 'PaySaleryController');

/*-----Department Controller Route-----*/
Route::resource('departments','DepartmentController');

/*-----Country Controller Route-----*/
Route::resource('countries','CountryController');

/*-----Event Controller Route-----*/
Route::resource('events', 'EventController');

/*-----Award Categories Controller Route-----*/
Route::resource('award_categories','AwardCategoryController');

/*-----Notice-----*/
Route::resource('notice','NoticeBoardController');

// TASK ROUTES
Route::resource('task','TaskController');

/*-----Leave Types Controller Route-----*/
Route::resource('leave_types','LeaveTypeController');

Route::resource('attandence', 'AttandenceController');


